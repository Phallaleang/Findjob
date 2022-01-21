<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample page</title>
    <link rel="stylesheet" href="../assets/css/Contact.css">
    <?php include '../assets/vender/library.php' ?>
</head>
<style>
    .sample-page{
        display:none;
    }
</style>
<body>
    
        <?php include 'NavbarPage.php' ?>
        <div class="wrap sample-page">
        <div class="w-full h-auto py-14 space-y-4 xl:px-14 lg:px-4 md:px-4 px-4" id="bg-img-sample">
            <h1 class="py-14 text-white text-4xl font-bold">
                Sample Page
            </h1>
        </div>

        <div class="w-full h-auto py-9 space-y-9">
            <div class="w-full grid  grid-cols-1  space-y-6">
                <div class="w-full h-auto lg:px-8 md:px-4 px-4 py-2 space-y-7">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, aliquam. Sapiente consectetur eum totam delectus error est in alias molestias dolore natus voluptas, recusandae, iure vitae enim soluta rem obcaecati.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem id dicta praesentium doloremque quidem nobis tenetur pariatur repellendus culpa saepe totam delectus, aliquid eaque ea natus odio repellat iste doloribus.
                    </p>
                    <div class="w-full h-40 flex space-x-6">
                        <p class="border-l-4 border-gray-300 h-full"></p>
                        <div class="py-12 text-xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero magnam sint suscipit ab aliquam nobis enim cum nemo doloremque libero ipsam laudantium hic, itaque aperiam voluptatum, doloribus rerum animi fugit?
                        </div>
                    </div>
                    <p>...or something like this:</p>
                    <div class="w-full h-40 flex space-x-6">
                        <p class="border-l-4 border-gray-300 h-full"></p>
                        <div class="py-12 text-xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero magnam sint suscipit ab aliquam nobis enim cum nemo doloremque libero ipsam laudantium hic, itaque aperiam voluptatum, doloribus rerum animi fugit?
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo excepturi laborum nisi expedita sapiente sunt minus sint quod quos vel.</p>
                </div>
            </div>

        </div>
        <!-- Footer -->
        <footer>
            <?php include 'Footer.php'; ?>
        </footer>

    </div>
</body>
<script>
      $(window).on('load', function() {
        $('.loading').fadeOut(1000);
        $('.sample-page').fadeIn(1000);
    })
</script>
</html>