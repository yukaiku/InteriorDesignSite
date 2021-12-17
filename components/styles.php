<style>
    .title{
        font-family: oxygenFont;
    }
    body{
        font-family: Helvetica;
        width: 100%;
    }
    .sourceSansProFont{
        font-family: sourceSansProFont;
    }
    .btn{
        border-radius: 0;
    }
    .btn-dark{
        background-color: #e3e3e3;
        color:black;
    }
    /*.btn-outline-dark:hover{*/
    /*    background-color: #e3e3e3 !important;*/
    /*    color: black;*/
    /*}*/
    .cBtn{
        text-align: center;
        vertical-align: middle;
        border-width: 0px;
        border-color: black;
        border-style: solid;
        background-color: transparent;
        display: inline-block;
        text-transform:uppercase;
        /*text-shadow: 1px 1px grey;*/
    }
    .cBtn:after{
        display:block;
        content: '';
        border-bottom: solid 1px black;
        transform: scaleX(0);
        transition: transform 250ms ease-in-out;
    }
    .cBtn:hover:after{
        transform: scaleX(1);
    }
</style>