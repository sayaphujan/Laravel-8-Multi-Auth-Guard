

<?php if($paginator->hasPages()): ?>
    <tr bgcolor="#BEBEBE">
      <td colspan="20">
       
        <?php if($paginator->onFirstPage()): ?>
            <a href="#" class="disabled" style="color:#000"><span>← Previous</span></a>
        <?php else: ?>
            <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev">← Previous</a>
        <?php endif; ?>


      
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
            <?php if(is_string($element)): ?>
                <a href="#" class="disabled" style="color:#000"><span><?php echo e($element); ?></span></li>
            <?php endif; ?>


           
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <a class="active my-active"><span><?php echo e($page); ?></span></a>
                    <?php else: ?>
                        <a href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        
        <?php if($paginator->hasMorePages()): ?>
            <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">Next →</a>
        <?php else: ?>
            <a href="#" class="disabled" style="color:#000"><span>Next →</span>
        <?php endif; ?>
    </td>
  </tr>
<?php endif; ?> 
<?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/pagination/pagination.blade.php ENDPATH**/ ?>