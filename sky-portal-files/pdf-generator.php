<?php
session_start();

// Check if user is logged in (adjust this based on your authentication system)
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include 'includes/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?php include 'includes/sidebar.php'; ?>
        
        <!-- Main Content -->
        <div class="col-md-10 col-lg-10 main-content">
            <div class="page-header mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2><i class="fas fa-file-pdf text-danger"></i> PDF Booking Confirmation</h2>
                        <p class="text-muted mb-0">Generate professional funeral transport confirmation documents</p>
                    </div>
                    <div>
                        <a href="dashboard.php" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i> Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- PDF Generator Card -->
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-plane"></i> Transport Funéraire - Document Generator
                    </h5>
                </div>
                <div class="card-body p-0">
                    <div class="alert alert-info m-3 mb-0">
                        <i class="fas fa-info-circle"></i>
                        <strong>Instructions:</strong> Fill in the form below to generate a professional PDF confirmation document. 
                        The document will be formatted for printing and can be saved or emailed to clients.
                    </div>
                    
                    <!-- Embedded PDF Tool -->
                    <iframe 
                        src="https://your-pdf-tool.netlify.app" 
                        width="100%" 
                        height="900px" 
                        frameborder="0"
                        class="pdf-generator-iframe"
                        title="PDF Booking Confirmation Generator">
                        <p>Your browser does not support iframes. 
                           <a href="https://your-pdf-tool.netlify.app" target="_blank">
                               Click here to open the PDF generator in a new window.
                           </a>
                        </p>
                    </iframe>
                </div>
            </div>
            
            <!-- Help Section -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0"><i class="fas fa-question-circle"></i> Need Help?</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6><i class="fas fa-edit text-primary"></i> Filling the Form</h6>
                                    <p class="small text-muted">Enter the deceased name, flight details, and transport information. All required fields are marked with *</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><i class="fas fa-download text-success"></i> Generating PDF</h6>
                                    <p class="small text-muted">Click "Generate Document" to create the PDF. Use your browser's print function to save or print.</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><i class="fas fa-mobile-alt text-info"></i> Mobile Access</h6>
                                    <p class="small text-muted">This tool works on mobile devices. For best results, use landscape orientation on tablets.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.pdf-generator-iframe {
    border: none;
    border-radius: 0 0 8px 8px;
    min-height: 900px;
}

.page-header {
    border-bottom: 1px solid #e9ecef;
    padding-bottom: 1rem;
}

@media (max-width: 768px) {
    .pdf-generator-iframe {
        height: 700px;
    }
    
    .page-header h2 {
        font-size: 1.5rem;
    }
}

/* Ensure the iframe is responsive */
@media (max-width: 576px) {
    .pdf-generator-iframe {
        height: 600px;
    }
}
</style>

<?php include 'includes/footer.php'; ?>