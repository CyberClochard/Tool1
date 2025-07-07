<!-- Add this to your includes/sidebar.php file -->
<!-- Place it in the appropriate section of your navigation menu -->

<li class="nav-item">
    <a class="nav-link" href="pdf-generator.php">
        <i class="fas fa-file-pdf text-danger"></i>
        <span class="nav-link-text">PDF Generator</span>
        <span class="badge badge-sm bg-success ms-auto">New</span>
    </a>
</li>

<!-- Alternative: As part of a Documents submenu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#documentsSubmenu" aria-expanded="false">
        <i class="fas fa-folder-open"></i>
        <span class="nav-link-text">Documents</span>
        <i class="fas fa-chevron-down ms-auto"></i>
    </a>
    <div class="collapse" id="documentsSubmenu">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a class="nav-link" href="pdf-generator.php">
                    <i class="fas fa-file-pdf text-danger"></i>
                    PDF Generator
                </a>
            </li>
            <!-- Add other document-related links here -->
        </ul>
    </div>
</li>