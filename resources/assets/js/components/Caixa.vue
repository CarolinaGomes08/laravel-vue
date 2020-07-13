<template>
  <div class="small-box bg-aqua">
    <div class="inner">
      <h3>150</h3>

      <p>New Orders</p>
    </div>
    <div class="icon">
      <i class="fa fa-shopping-cart"></i>
    </div>
    <a href="#" class="small-box-footer">
      More info <i class="fa fa-arrow-circle-right"></i>
    </a>
  </div>

</template>

<script>
    export default {
       
    }
</script>  

<style media="screen">
  .bg-aqua{
    background-color: #00c0ef !important;
  } 

   .small-box{
    border-radius: 2px;
    position: relative;
    display: block;
    margin-bottom: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }

  .small-box>.inner {
    padding: 10px;
  }

  .small-box h3, .small-box p {
    z-index: 5;
  }

  .small-box h3 {
    font-size: 38px;
    font-weight: bold;
    margin: 0 0 10px 0;
    white-space: nowrap;
    padding: 0;
  }

  .small-box p {
    font-size: 15px;
  }

  p {
    margin: 0 0 10px;
  }

  .small-box .icon {
    -webkit-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    position: absolute;
    top: -10px;
    right: 10px;
    z-index: 0;
    font-size: 90px;
    color: rgba(0,0,0,0.15);
  }

  .small-box>.small-box-footer {
    position: relative;
    text-align: center;
    padding: 3px 0;
    color: #fff;
    color: rgba(255,255,255,0.8);
    display: block;
    z-index: 10;
    background: rgba(0,0,0,0.1);
    text-decoration: none;
  }

  a {
    color: #3c8dbc;
  }

</style>

