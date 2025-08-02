<?php
session_start();
require 'config.php';

if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit();
}

$users = $conn->query("SELECT id, name, email, role FROM users");
$messages = $conn->query("SELECT id, name, email, message, created_at FROM messages ORDER BY created_at DESC");
$workouts = $conn->query("SELECT id, title, description FROM workouts");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - FitPilot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">
    <style>
        :root {
            --primary: #4e73df;
            --primary-dark: #2e59d9;
            --accent: #f6c23e;
            --success: #1cc88a;
            --info: #36b9cc;
            --warning: #f6c23e;
            --danger: #e74a3b;
            --light: #f8f9fc;
            --dark: #5a5c69;
            --bg: #f4f4f4;
            --sidebar: #212529;
            --white: #fff;
            --text: #333;
            --shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }

        body {
            font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: var(--bg);
            margin: 0;
            padding: 0;
            color: var(--dark);
            overflow-x: hidden;
        }

        .sidebar {
            background: var(--sidebar);
            min-height: 100vh;
            width: 14rem;
            position: fixed;
            left: 0;
            top: 0;
            box-shadow: var(--shadow);
            z-index: 1000;
            transition: all 0.3s;
        }

        .sidebar-brand {
            height: 4.375rem;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 800;
            padding: 1.5rem 1rem;
            text-align: center;
            letter-spacing: 0.05rem;
            z-index: 1;
            color: var(--white);
            display: block;
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar-divider {
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            margin: 0 1rem 1rem;
        }

        .sidebar-item {
            position: relative;
        }

        .sidebar-link {
            padding: 0.75rem 1rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            display: block;
            transition: all 0.3s;
        }

        .sidebar-link:hover {
            color: var(--white);
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar-link i {
            margin-right: 0.5rem;
        }

        .sidebar-link.active {
            color: var(--white);
            background: rgba(255, 255, 255, 0.2);
        }

        #content-wrapper {
            margin-left: 14rem;
            width: calc(100% - 14rem);
            min-height: 100vh;
            transition: all 0.3s;
        }

        .topbar {
            height: 4.375rem;
            box-shadow: var(--shadow);
            background: var(--white);
            padding: 0 1.5rem;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .topbar-divider {
            width: 0;
            border-right: 1px solid #e3e6f0;
            height: calc(4.375rem - 2rem);
            margin: auto 1rem;
        }

        .navbar-search {
            width: 25rem;
        }

        .search-input {
            border: none;
            background: var(--light);
            padding: 0.375rem 0.75rem;
            border-radius: 0.35rem;
            transition: all 0.3s;
        }

        .search-input:focus {
            background: var(--white);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .nav-item .nav-link {
            position: relative;
        }

        .card {
            border: none;
            border-radius: 0.35rem;
            box-shadow: var(--shadow);
            margin-bottom: 1.5rem;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background-color: var(--white);
            border-bottom: 1px solid #e3e6f0;
            padding: 1rem 1.35rem;
            border-radius: 0.35rem 0.35rem 0 0 !important;
        }

        .card-body {
            padding: 1.5rem;
        }

        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .btn-danger {
            background-color: var(--danger);
            border-color: var(--danger);
        }

        .btn-success {
            background-color: var(--success);
            border-color: var(--success);
        }

        .btn-warning {
            background-color: var(--warning);
            border-color: var(--warning);
            color: var(--dark);
        }

        .badge-primary {
            background-color: var(--primary);
        }

        .badge-success {
            background-color: var(--success);
        }

        .badge-danger {
            background-color: var(--danger);
        }

        .badge-warning {
            background-color: var(--warning);
            color: var(--dark);
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
            padding: 0.375rem 0.75rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        .message-preview {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1100;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .toast.show {
            opacity: 1;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 0;
                overflow: hidden;
            }

            #content-wrapper {
                margin-left: 0;
                width: 100%;
            }

            .sidebar.show {
                width: 14rem;
                z-index: 1001;
            }

            #content-wrapper.shrink {
                margin-left: 0;
                width: 100%;
            }

            .topbar {
                position: static;
            }

            .navbar-search {
                width: 100%;
            }
        }

        /* Animation for page content */
        .animate-fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a class="sidebar-brand" href="#">
            <i class="fas fa-rocket me-2"></i>
            <span>FitPilot Admin</span>
        </a>
        
        <div class="sidebar-divider"></div>
        
        <!-- Navigation Items -->
        <div class="sidebar-item">
            <a class="sidebar-link active" href="#" data-section="dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </div>
        
        <div class="sidebar-item">
            <a class="sidebar-link" href="#" data-section="users">
                <i class="fas fa-fw fa-users"></i>
                <span>Users</span>
            </a>
        </div>
        
        <div class="sidebar-item">
            <a class="sidebar-link" href="#" data-section="messages">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Messages</span>
            </a>
        </div>
        
      
        
        <div class="sidebar-item mt-auto">
            <a class="sidebar-link" href="logout.php">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </div>
    </div>

    <!-- Content Wrapper -->
    <div id="content-wrapper">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggle" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['name'] ?></span>
                        <img class="img-profile rounded-circle" src="https://ui-avatars.com/api/?name=<?= urlencode($_SESSION['name']) ?>&background=random">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid animate-fade-in">
            <!-- Dashboard Heading -->
            <div class="d-flex flex-column align-items-center justify-content-center mb-4">
                <h1 class="h3 mb-0 text-gray-800 text-center">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row justify-content-center">
                <!-- Users Card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2 text-center">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center justify-content-center">
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                                <div class="col ml-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Users</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $users->num_rows ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Messages Card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2 text-center">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center justify-content-center">
                                <div class="col-auto">
                                    <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                </div>
                                <div class="col ml-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        New Messages</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $messages->num_rows ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Management Section -->
            <div class="card shadow mb-4" id="users-section">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-users mr-2"></i>User Management
                    </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fadeIn" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">User Actions:</div>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                <i class="fas fa-user-plus mr-2"></i>Add New User
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-file-export mr-2"></i>Export Users
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="usersTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($user = $users->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $user['id'] ?></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=<?= urlencode($user['name']) ?>&background=random" class="user-avatar">
                                            <?= $user['name'] ?>
                                        </div>
                                    </td>
                                    <td><?= $user['email'] ?></td>
                                    <td>
                                        <span class="badge <?= $user['role'] === 'admin' ? 'badge-primary' : 'badge-success' ?>">
                                            <?= ucfirst($user['role']) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" onclick="confirmDelete(<?= $user['id'] ?>)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Messages Section -->
            <div class="card shadow mb-4" id="messages-section">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-envelope mr-2"></i>Messages
                    </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fadeIn" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Message Actions:</div>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-inbox mr-2"></i>Mark all as read
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-file-export mr-2"></i>Export Messages
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="messagesTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($message = $messages->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $message['id'] ?></td>
                                    <td><?= $message['name'] ?></td>
                                    <td><?= $message['email'] ?></td>
                                    <td class="message-preview" title="<?= htmlspecialchars($message['message']) ?>">
                                        <?= substr($message['message'], 0, 50) ?>...
                                    </td>
                                    <td><?= date('M d, Y h:i A', strtotime($message['created_at'])) ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" data-toggle="tooltip" title="View" onclick="viewMessage(<?= $message['id'] ?>)">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" onclick="confirmDeleteMessage(<?= $message['id'] ?>)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; FitPilot <?= date('Y') ?></span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

    
<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="add_user.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                            <option value="trainer">Trainer</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View Message Modal -->
<div class="modal fade" id="viewMessageModal" tabindex="-1" aria-labelledby="viewMessageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewMessageModalLabel">Message Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">From:</label>
                    <p id="messageFrom" class="form-control-static"></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <p id="messageEmail" class="form-control-static"></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date:</label>
                    <p id="messageDate" class="form-control-static"></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Message:</label>
                    <div id="messageContent" class="p-3 bg-light rounded"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Reply</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this item? This action cannot be undone.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a id="deleteConfirmBtn" href="#" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
    <!-- Toast Notification -->
    <div class="toast" id="toastNotification" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto" id="toastTitle">Notification</strong>
            <small>Just now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" id="toastMessage">
            Action completed successfully.
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>

    <script>
        // Initialize DataTables
        $(document).ready(function() {
            $('#usersTable').DataTable({
                responsive: true,
                order: [[0, 'desc']]
            });
            
            $('#messagesTable').DataTable({
                responsive: true,
                order: [[4, 'desc']]
            });

            // Initialize tooltips
            $('[data-toggle="tooltip"]').tooltip();

            // Sidebar toggle functionality
            $('#sidebarToggle').click(function(e) {
                e.preventDefault();
                $('#sidebar').toggleClass('show');
                
                // Store sidebar state in localStorage
                if ($('#sidebar').hasClass('show')) {
                    localStorage.setItem('sidebarState', 'expanded');
                } else {
                    localStorage.setItem('sidebarState', 'collapsed');
                }
            });

            // Check sidebar state on page load
            const sidebarState = localStorage.getItem('sidebarState');
            if (sidebarState === 'collapsed' || $(window).width() < 768) {
                $('#sidebar').removeClass('show');
            }

            // Show toast notification if there's a message in URL
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('message')) {
                showToast('Success', urlParams.get('message'), 'success');
            }
        });

        // Show toast notification
        function showToast(title, message, type = 'info') {
            $('#toastTitle').text(title);
            $('#toastMessage').text(message);
            $('#toastNotification').addClass(`bg-${type} text-white`);
            const toast = new bootstrap.Toast($('#toastNotification')[0]);
            toast.show();
        }

        // Confirm delete functions
        function confirmDelete(id) {
            $('#deleteConfirmBtn').attr('href', `delete_user.php?id=${id}`);
            const modal = new bootstrap.Modal($('#confirmDeleteModal')[0]);
            modal.show();
        }

        function confirmDeleteMessage(id) {
            $('#deleteConfirmBtn').attr('href', `delete_message.php?id=${id}`);
            const modal = new bootstrap.Modal($('#confirmDeleteModal')[0]);
            modal.show();
        }

        // View message details
        function viewMessage(id) {
            // In a real app, you would fetch this data via AJAX
            // For demo purposes, we'll simulate it
            $.get(`get_message.php?id=${id}`, function(data) {
                $('#messageFrom').text(data.name);
                $('#messageEmail').text(data.email);
                $('#messageDate').text(new Date(data.created_at).toLocaleString());
                $('#messageContent').text(data.message);
                const modal = new bootstrap.Modal($('#viewMessageModal')[0]);
                modal.show();
            }).fail(function() {
                showToast('Error', 'Failed to load message details', 'danger');
            });
        }
    </script>
</body>
</html>