<!-- sidebar -->
<?php $i=0;
?>
<div class="sidebar">

<div class="wid-box">
<div class="sidebar-subs">
<h1 class="display-4"><i class=" zmdi zmdi-account-add" style="margin-right:4px;"></i>Subscribe Now : </h1>
<hr class="hr-green">
<form class="form-group" action="">
    <label for="Subs-Email">Email :</label> <br>
    <input class="form-control" type="email" placeholder="Email" name="subs-email" id="Subs-Email"> <br>
    <button type="submit" class="btn btn-secondary" name="submit">Subscribe</button>
</form>
</div>
</div>

<div class="wid-box">
    <div class="tags">
    <h1 class="display-4"><i class=" zmdi zmdi-tag" style="margin-right:4px;"></i>Tags : </h1>
<hr class="hr-orange">
   <ul>
   <li><a href="" >JavaScript</a></li>
   <li><a href="">Python</a></li>
   <li> <a href="">C Language</a></li>
   <li> <a href="">PHP</a></i>
   </ul>
    </div>
</div>

<div class="wid-box" >
<div class="recent-posts">
    <h1 class="display-4"><i class="spinner zmdi zmdi-spinner" style="margin-right:4px;" ></i>Recent Posts : </h1>
    <hr class="hr-wheat">
    <ul >
    <?php foreach($opt_data as  $recent_posts) : ?>
    <?php  if ($i<5): ?>
        <li><a href="<?php echo ROOT_PATH; ?>/Post/<?php echo str_replace(' ', '-',$recent_posts['post_title']); ?>"><i class="zmdi zmdi-long-arrow-right"></i><?php echo $recent_posts["post_title"]; ?></a> </li>
    <?php $i++; endif;?>
    <?php endforeach; ?>
    </ul>
</div>
</div>

</div>