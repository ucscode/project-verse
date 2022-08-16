	<?php if( !$page->blank ): ?>
	
				<?php if( $page->sidebar ): ?>
					<div class='col-lg-4'>
						<div class='position-sticky aside'>
							<div class='border rounded-1 p-2 sidebar'>
								<?php events::exec('@sidebar'); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				
			</div> <!-- /row -->
		</main>
		
		<footer class="py-3 my-4">
			<?php events::exec("@footer"); ?>
			<div class='border-top pt-3 mt-3'>
				<p class="text-center text-muted">	
					© 2022 - <a href='<?php echo core::url(); ?>'> <?php echo $GLOBALS['Config']->sitename; ?> </a>
				</p>
			</div>
		</footer>
		
	<?php endif; ?>
	
	<?php events::exec("@footer:start"); ?>
	<script src='<?php echo core::url( TEMP_DIR . '/assets/vendor/bootstrap-5.2.0/js/bootstrap.bundle.min.js' ); ?>'></script>
	<script src='<?php echo core::url( TEMP_DIR . '/assets/vendor/jquery-3.4.1.min.js' ); ?>'></script>
	<?php 
		events::exec("@footer:end"); 
		events::exec("@body:end"); 
	?>
	
</body>
</html>