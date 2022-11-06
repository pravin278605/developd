<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

<style>
    
    input[type="text"], textarea, input[type="password"] {
    font-size: 16px;
    border: 1px solid #ececec75;
    width: 100%;
    padding: 12px 20px;
    margin: 0 0 8px 0;
    resize: none;
    background: #f5f5f5;
    -webkit-appearance: none;
    border-radius: 2px;
    font-weight: 200;
}

.flex-row {
    display: flex;
    flex: 1;
}

.flex-col-sm-5 {
    flex: 1;
    padding: 0 10px;
}
.form-field-wrapper {
    margin: 0 0 20px 0;
}

span.input-group-addon {
    background: transparent;
    position: absolute;
    border: 0;
    top: 41%;
    right: 0;
    display: block;
    width: 100%;
    height: 100%;
    text-align: right;
    transform: translateY(-50%);
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
</style>
<script type="text/javascript">
$(function () {


 // var start_date1 ='';
 // var end_date1 = '';
  
  //if(start_date1=='' && end_date1=='')
  //{
   $('#datetimepicker1').datetimepicker({
       useCurrent: false,              
       format: 'DD/MM/YYYY'
   }).on('dp.change', function(e){
     var incrementDay=moment(new Date(e.date));
     incrementDay.add(1,'days');    
     $('#datetimepicker2').data("DateTimePicker").minDate(incrementDay);        
   });
  
  
 $('#datetimepicker2').datetimepicker({
  useCurrent: false,
  format: 'DD/MM/YYYY'
  }).on('dp.change', function(e){
  
  $('#datetimepicker1').data("DateTimePicker").maxDate(e.date)+1;
  
  
  });
  //}
  
  
 
  
  
  
  
  
  
  
  });






  $("#beacon").change(function(){
    alert($(this).val());
});

</script>














<div class="flex-col-sm-5">
                              <div class="flex-row">
                                 <div class="flex-col-sm-5">
                                    <div class="form-field-wrapper">
                                       <div class="input-group date datetimepickerclass" id="datetimepicker1">
                                          <input type="text" id="datetimepicker1"   placeholder="Start Date">
                                          <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="flex-col-sm-5">
                                    <div class="form-field-wrapper">
                                       <div class="input-group date datetimepickerclass" id="datetimepicker2">
                                          <input type="text" id="datetimepicker2" placeholder="End Date">
                                          <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


<?php 

echo "dfdf";

?>




