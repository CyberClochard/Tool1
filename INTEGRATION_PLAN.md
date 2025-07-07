# SKY-Portal Integration Plan

## 🎯 Your Specific Integration Solution

Based on your SKY-Portal dashboard, here's the exact plan:

### Step 1: Deploy Your PDF Tool (5 minutes)
1. Go to [netlify.com](https://netlify.com) and sign up (free)
2. Drag your current PDF project folder to Netlify
3. You'll get a URL like: `https://sky-pdf-tool.netlify.app`

### Step 2: Add to Your SKY-Portal (10 minutes)

**Option A: Add as a new page (Recommended)**
Create a new file: `pdf-generator.php` in your SKY-Portal root:

```php
<?php
session_start();
include 'includes/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?php include 'includes/sidebar.php'; ?>
        
        <!-- Main Content -->
        <div class="col-md-10 col-lg-10 main-content">
            <div class="page-header">
                <h2><i class="fas fa-file-pdf"></i> PDF Booking Confirmation Generator</h2>
                <p class="text-muted">Generate professional funeral transport confirmation documents</p>
            </div>
            
            <div class="card">
                <div class="card-body p-0">
                    <iframe 
                        src="https://your-pdf-tool.netlify.app" 
                        width="100%" 
                        height="900px" 
                        frameborder="0"
                        style="border-radius: 0 0 8px 8px;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
```

**Option B: Add to existing page**
Add this to any existing page (like `dashboard.php`):

```php
<!-- PDF Generator Section -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
        <div class="card-body text-center">
            <i class="fas fa-file-pdf fa-3x text-danger mb-3"></i>
            <h5 class="card-title">PDF Generator</h5>
            <p class="card-text">Generate booking confirmation PDFs</p>
            <a href="pdf-generator.php" class="btn btn-primary">
                <i class="fas fa-external-link-alt"></i> Open Tool
            </a>
        </div>
    </div>
</div>
```

### Step 3: Update Navigation (5 minutes)

Add to your sidebar navigation (in `includes/sidebar.php`):

```php
<li class="nav-item">
    <a class="nav-link" href="pdf-generator.php">
        <i class="fas fa-file-pdf"></i>
        <span>PDF Generator</span>
    </a>
</li>
```

## 🎨 Styling to Match Your Dashboard

Your PDF tool will automatically inherit some styling from your dashboard. To make it blend perfectly:

```css
/* Add to your main CSS file */
.pdf-generator-iframe {
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.pdf-card {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}
```

## 📱 Mobile Responsive

Your integration will work on mobile automatically, but you can optimize:

```css
@media (max-width: 768px) {
    .pdf-generator-iframe {
        height: 700px;
    }
}
```

## ✅ Testing Checklist

1. [ ] PDF tool deploys successfully on Netlify
2. [ ] New page loads in your SKY-Portal
3. [ ] Navigation link works
4. [ ] Tool is accessible on mobile
5. [ ] PDFs generate and download correctly

## 🚀 Go Live Process

1. **Test locally first** - Make sure everything works
2. **Upload to your server** - Add the new files to your live SKY-Portal
3. **Test live** - Verify everything works in production
4. **Train your team** - Show them how to use the new tool

## 🆘 If You Get Stuck

**Most common issues and solutions:**

1. **"Page not found"** - Make sure you uploaded the new PHP file
2. **"Iframe not loading"** - Check your Netlify URL is correct
3. **"Styling looks off"** - This is normal, the tool will adapt to your dashboard
4. **"Mobile issues"** - Adjust the iframe height in CSS

## 📞 Support

If you need help:
1. Check the file paths are correct
2. Verify your Netlify deployment is live
3. Test in different browsers
4. Ask for help with specific error messages

---

**Time to complete:** 20 minutes total
**Technical difficulty:** Beginner friendly
**Result:** Professional PDF generator integrated into your dashboard