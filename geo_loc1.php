<!DOCTYPE html>
<html>
  <head>
  <title>Zipcode Lookup Demo</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.js"></script>
  <style>
  input, label, select {
    display: block;
    width: 100%;
    margin: 0;
    width: 150px;
  }
  body {
    background-color: #eee;
  }
  </style>

</head>
<body>
<p>Enter your zipcode and watch the city and state appear magically!</p>

     

<!-- Postcode field -->
<div id="postcode_lookup"></div>  

<!-- Add to your existing form -->
<label>First Address Line</label>
<input id="line1" type="text"> 

<label>Second Address Line</label>
<input id="line2" type="text">   

<label>Third Address Line</label>
<input id="line3" type="text">  

<label>Town</label>
<input id="town" type="text">

<label>County</label>
<input id="county" type="text">

<label>Postcode</label>
<input id="postcode" type="text">
                            



<!-- Include plugin file -->
<script src="https://getaddress.io/js/jquery.getAddress-2.0.7.min.js"></script>

<!-- Add after your form -->
<script>
//afzalazeez09@gmail.com : NgaMrBI66U6uVxZSLj4ImQ10295
//soni@sparksupport.com : KE4sovuEJ0i3CexVFE-v7A10294
//afzal@sparksupport.com : X_qZzLscmkSFHlQ-HEswQQ10277
//sonijoyk@gmail.com : royCAZlbe0aUoafEftT_DQ10296

$('#postcode_lookup').getAddress({
    api_key: 'X_qZzLscmkSFHlQ-HEswQQ10277',  
    output_fields:{
        line_1: '#line1',
        line_2: '#line2',
        line_3: '#line3',
        post_town: '#town',
        county: '#county',
        postcode: '#postcode'
    },
                                                                                                             
    onLookupSuccess: function(data){/* Your custom code */},
    onLookupError: function(){/* Your custom code */},
    onAddressSelected: function(elem,index){/* Your custom code */}
});
</script>

