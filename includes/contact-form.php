<?php $_SESSION['from_site'] = 'yes'; ?>
<div id="contact-form">
	<p>Contact Our Team</p><span class="alert note hidden" id="success" style="margin-top:8px;"><br />Your form has been submitted.</span></p>
    <form id="contactForm">
        <input id="first" name="first" />
        <input id="last" name="last" />
        <input id="email" name="email" />
        <input id="phone" name="phone" />
        <select id="preferred">
            <option value="N/A">Contact Preference</option>
            <option>Phone</option>
            <option>Email</option>
            </select>
        <textarea id="comments" name="comments"></textarea>
        
    	<input type="button" class="submit" value="Contact Us" onclick="javascript: sendEmail();"/>
        
    </form>
    
</div>