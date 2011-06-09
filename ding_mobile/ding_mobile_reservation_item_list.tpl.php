<h3><?php print $headline ?></h3>
<ul<?php print drupal_attributes($attributes) ?> >
  <?php foreach ($items as $item) { ?>
    <li<?php print drupal_attributes($item['attributes']) ?>>
     <label>
       <?php
         print $item['checkbox'];
         print $item['title'];
       ?>
     </label>

     <ul class="information">
       <?php foreach ($item['information'] as $info) { ?>
        <li class="list-item">
        <em class="label"><?php print $info['label'] ?>:</em>
        <span class="value"><?php print $info['value'] ?></span>
        </li>
       <?php } ?>
     </ul>
    </li>
  <?php } ?>
</ul>

