<?php if (!empty($posts)): ?>
  <?php $column = 1; ?>
  <?php foreach ($posts as $post): ?>
    <?php
      $uri = $this->Blog->getPostLinkUrl($post, false);
      $title = mb_substr($post['BlogPost']['name'], 0, 16);
      $text = mb_substr($post['BlogPost']['content'], 0, 21);
      if($column == 1) echo '<div class="row">';
     ?>
    <div class="col-md-4 mb-5">
      <div class="card">
        <a href="<?php echo $uri; ?>" class="a-card-dub">
          <?php $this->Blog->eyeCatch($post, array('link' => false, 'class' => 'card-img-top')); ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $title; ?></h5>
            <p class="card-text"><?php echo $text; ?></p>
          </div>
        </a>
      </div>
    </div>
    <?php
      if($column != 3){
        $column++;
      }elseif($column == 3){
        echo '</div>';
        $column = 1;
      }
     ?>
  <?php endforeach; ?>
</div>
<?php else: ?>
<p class="text-center my-5">no data.</p>
<?php endif; ?>
