# Integration Examples - How to Add Your PDF Tool to Existing Dashboards

## Example 1: Simple Link Integration (Easiest)

### If your dashboard is HTML-based:
```html
<!-- Add this to your dashboard's navigation or main page -->
<div class="dashboard-section">
  <h3>Documents</h3>
  <a href="https://your-pdf-tool.netlify.app" 
     target="_blank" 
     class="btn btn-primary">
    📄 Generate Booking Confirmation PDF
  </a>
</div>
```

### If your dashboard uses WordPress:
1. Go to your WordPress admin
2. Edit the page where you want the link
3. Add this HTML block:
```html
<a href="https://your-pdf-tool.netlify.app" 
   target="_blank" 
   style="background: #1e293b; color: white; padding: 12px 24px; text-decoration: none; border-radius: 8px; display: inline-block;">
   📄 Generate PDF Booking Confirmation
</a>
```

## Example 2: Embedded Integration (Medium)

### Using an iframe (works with any dashboard):
```html
<!-- Add this where you want the PDF tool to appear -->
<div style="width: 100%; height: 800px; border: 1px solid #ccc; border-radius: 8px;">
  <iframe 
    src="https://your-pdf-tool.netlify.app" 
    width="100%" 
    height="100%" 
    frameborder="0"
    style="border-radius: 8px;">
  </iframe>
</div>
```

## Example 3: React Dashboard Integration (Advanced)

### If your existing dashboard is built with React:

1. **Copy these files to your dashboard project:**
   - `src/components/BookingForm.tsx`
   - `src/components/BookingConfirmationTemplate.tsx`
   - `src/types/booking.ts`

2. **Install required dependencies:**
   ```bash
   npm install lucide-react
   ```

3. **Add to your dashboard component:**
   ```tsx
   import BookingForm from './components/BookingForm';
   import BookingConfirmationTemplate from './components/BookingConfirmationTemplate';
   
   function Dashboard() {
     const [showPDFTool, setShowPDFTool] = useState(false);
     
     return (
       <div className="dashboard">
         {/* Your existing dashboard content */}
         
         <button onClick={() => setShowPDFTool(true)}>
           Generate PDF Booking Confirmation
         </button>
         
         {showPDFTool && (
           <div className="modal">
             <BookingForm onSubmit={(data) => {
               // Handle the PDF generation
               console.log('PDF data:', data);
             }} />
           </div>
         )}
       </div>
     );
   }
   ```

## Example 4: PHP Dashboard Integration

### If your dashboard is built with PHP:

1. **Create a new PHP page** (`pdf-generator.php`):
   ```php
   <?php include 'header.php'; ?>
   
   <div class="content">
     <h2>PDF Booking Confirmation Generator</h2>
     <iframe 
       src="https://your-pdf-tool.netlify.app" 
       width="100%" 
       height="800px" 
       frameborder="0">
     </iframe>
   </div>
   
   <?php include 'footer.php'; ?>
   ```

2. **Add a link in your main dashboard:**
   ```php
   <a href="pdf-generator.php" class="dashboard-link">
     📄 Generate PDF Booking Confirmation
   </a>
   ```

## Example 5: Custom CMS Integration

### For custom content management systems:

1. **Create a new page/module** in your CMS admin
2. **Add this HTML content:**
   ```html
   <div class="pdf-generator-section">
     <h3>Generate Booking Confirmation PDF</h3>
     <p>Use this tool to create professional PDF confirmations for funeral transport bookings.</p>
     
     <iframe 
       src="https://your-pdf-tool.netlify.app" 
       width="100%" 
       height="800px" 
       style="border: 1px solid #ddd; border-radius: 8px;">
     </iframe>
   </div>
   ```

## Quick Deployment Guide

### Step 1: Deploy Your PDF Tool
1. Go to [netlify.com](https://netlify.com)
2. Sign up for free
3. Drag your project folder to Netlify
4. Get your live URL (e.g., `https://amazing-site-123.netlify.app`)

### Step 2: Test Your Integration
1. Add one of the examples above to your dashboard
2. Replace `https://your-pdf-tool.netlify.app` with your actual URL
3. Test that it works

### Step 3: Customize the Styling
Match your dashboard's look by modifying the CSS:
```css
/* Example: Make the button match your dashboard */
.pdf-generator-button {
  background-color: #your-brand-color;
  color: white;
  padding: 12px 24px;
  border: none;
  border-radius: 4px;
  font-family: your-dashboard-font;
  cursor: pointer;
}
```

## Troubleshooting Common Issues

### Issue: "This site can't be reached"
**Solution:** Make sure your PDF tool is deployed and the URL is correct

### Issue: "Mixed content" errors
**Solution:** Make sure both your dashboard and PDF tool use HTTPS

### Issue: Styling looks different
**Solution:** The PDF tool might inherit some styles from your dashboard. This is normal.

### Issue: Mobile responsiveness
**Solution:** Test on mobile devices and adjust iframe height if needed

## Next Steps

1. **Choose the integration method** that matches your technical comfort level
2. **Deploy your PDF tool** using Netlify (free and easy)
3. **Test the integration** with one of the examples above
4. **Customize the styling** to match your dashboard
5. **Train your team** on how to use the new tool

Remember: Start simple and improve over time! 🚀