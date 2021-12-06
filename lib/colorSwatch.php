<style >
    .colors {
        display: flex;
        padding-bottom: 5%;
    }

    .color {
        height: 36px;
        width: 36px;
        margin-left: 0.5em;
        border-radius: 18px;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.3);
        border: 2px solid #aaa;
        cursor: pointer;
    }
</style>
<script type="text/javascript">
    // Click on a color
    $( document ).ready(function() {
        var el = document.getElementsByClassName("color");
        for (var i = 0; i < el.length; i++) {
            el[i].onclick = changeColor;
        }

        function changeColor(e) {
            //reset all border color
            for (var i = 0; i < el.length; i++) {
                el[i].style.borderColor = "#aaa";
            }
            // get the hex color
            let hex = e.target.getAttribute("data-hex");
            // set the hex color
            e.target.style.borderColor = "black";
        }
    });
</script>