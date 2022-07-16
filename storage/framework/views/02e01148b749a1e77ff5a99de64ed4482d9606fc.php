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
        <div class="flex flex-col md:flex-row lg:mx-auto container">
            <?php echo e($slot); ?>

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
</html><?php /**PATH F:\project\test\lotto\resources\views/components/layout.blade.php ENDPATH**/ ?>