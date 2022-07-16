<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto Results</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body class="bg-white-400">
    <div id="app">
        <main-navigation></main-navigation>
        <div class="justify-items-center w-full container">
        <side-section latest-results="<?php echo e($results); ?>"></side-section>
        <!-- <lotto-study stats="<?php echo e($stats); ?>"></lotto-study> -->
        </div>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script>
		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function(){
			document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>
</body>
</html><?php /**PATH F:\project\test\lotto\resources\views/results.blade.php ENDPATH**/ ?>