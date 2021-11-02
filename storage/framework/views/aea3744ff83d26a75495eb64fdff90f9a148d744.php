
<?php $__env->startSection('contenu1'); ?>
	
		<div id="contenu">
				<?php echo e($nbFrais); ?> fiche(s) ont été détéctées pour <b><?php echo e($unVisiteur['nom'] . ' ' . $unVisiteur['prenom']); ?></b>. Voulez-vous le supprimer ?
				</br>
				<button><a href=" <?php echo e(route('chemin_validSup', $unVisiteur['id'])); ?> " >Valider</a></button>
				<button><a href=" <?php echo e(route('chemin_afficherVisiteur')); ?> ">Annuler</a></button>
		</div>
<?php $__env->stopSection(); ?>
 </form>
<?php echo $__env->make('newrole', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\gsbLaravel\resources\views/check.blade.php ENDPATH**/ ?>