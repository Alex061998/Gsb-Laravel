<?php $__env->startSection('contenu1'); ?>

	<div id="contenu">
		<h1>Les Visiteurs</h1>
				<div class="corpsForm">
					<table class = "Visiteur">
                        <tr>
                          <th>ID</th>
                          <th>Nom</th>
                          <th>Prenom</th>
                          <th>Date Embauche</th>
                          <th>Supprimer</th>

                        </tr>
                        <?php $__currentLoopData = $lesVisiteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visiteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($visiteur['id']); ?></td>
                            <td><?php echo e($visiteur['nom']); ?></td>
                            <td><?php echo e($visiteur['prenom']); ?></td>
                            <td><?php echo e($visiteur['dateEmbauche']); ?> </td>
                            <td><button><a href=" <?php echo e(route('chemin_supVisiteur', $visiteur['id'])); ?> " >Delete</a></button></td>
                          </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('newrole', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\gsbLaravel\resources\views/supVisiteur.blade.php ENDPATH**/ ?>