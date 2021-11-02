<?php $__env->startSection('contenu1'); ?>

	<div id="contenu">
		<h1>Archive Visiteurs</h1>
				<table class = "Visiteur">
					<tr>
						<th>Id Visiteur</th>
						<th>Nom visiteur</th>
						<th>Prenom visiteur</th>
						<th>Date Embauche</th>
						<th>Id gestionnaire</th>
						<th>Date Supression</th>
					</tr>
					<?php $__currentLoopData = $lesVisiteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unVisiteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			           <tr>
			              <td><?php echo e($unVisiteur['idVisiteur']); ?></td>
			              <td><?php echo e($unVisiteur['nomVisiteur']); ?></td>
			              <td><?php echo e($unVisiteur['prenomVisiteur']); ?></td>
			              <td><?php echo e($unVisiteur['dateEmbauche']); ?> </td>
			              <td><?php echo e($unVisiteur['idGestionnaire']); ?> </td>
			              <td><?php echo e($unVisiteur['dateSuppression']); ?> </td>
			              </tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('newrole', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\gsbLaravel\resources\views/archive.blade.php ENDPATH**/ ?>