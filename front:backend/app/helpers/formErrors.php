<?php if (count($formErrors) > 0) : ?>
 <div class="msg error">
  <?php foreach ($formErrors as $formError) :  ?>
   <li><?php echo $formError; ?></li>
  <?php endforeach; ?>
 </div>
<?php endif; ?>