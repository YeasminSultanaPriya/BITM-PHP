<?php include 'includes/header.php' ?>

 <section class="py-5">
     <div class="container">
         <div class="row">
             <div class="col-md-6 mx-auto">
                 <div class="card">
                     <div class="card-header">
                         <h2 class="text-center">Calculator</h2>
                     </div>
                     <div class="card-body">
                         <form action="action.php" method="post">
                             <div class="row mt-3">
                                 <label for="" class="col-md-4">Num1</label>
                                 <div class="col-md-8">
                                     <input type="number" name="number1" value="" class="form-control">
                                 </div>
                             </div>
                             <div class="row mt-3">
                                 <label for="" class="col-md-4">Num2</label>
                                 <div class="col-md-8">
                                     <input type="number" name="number2" value="" class="form-control">
                                 </div>
                             </div>
                             <div class="row mt-3">
                                 <label for="" class="col-md-4">Choice</label>
                                 <div class="col-md-8">
                                     <label for=""><input type="radio" name="choice"  value="+">+</label>
                                     <label for=""><input type="radio" name="choice" value="-">-</label>
                                     <label for=""><input type="radio" name="choice" value="*">*</label>
                                     <label for=""><input type="radio" name="choice" value="/">/</label>
                                     <label for=""><input type="radio" name="choice" value="%">%</label>
                                 </div>

                             </div>
                             <div class="row mt-3">
                                 <label for="" class="col-md-4">Result</label>
                                 <div class="col-md-8">
                                     <input type="text" name="" value="<?php echo isset($result)? $result: ''?>" class="form-control" readonly>
                                 </div>
                             </div>
                             <div class="mt-3">

                                 <input type="submit" name="calculator-btn" value="Get Result" class=" btn btn-success form-control">
                             </div>

                         </form>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </section>

<?php include 'includes/footer.php' ?>
