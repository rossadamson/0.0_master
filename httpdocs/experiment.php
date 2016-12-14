<?php include_once 'particles/header.php'; ?>


<!-- First Panel -->
<div class="container p-b-6" id="Section1">
    <div class="row">
        <div class="col-md-12 m-b-2" style="height:290px;">
            <div class="shape">
                <div id="square" class="red">
                </div>
            </div>
        </div>
    </div>

    <div class="row p-b-6">
        <div class="col-md-6 m-b-2">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Shape
                </button>
                <div class="dropdown-menu" id="shapes" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" data-shape="square" href="#">square</a>
                    <a class="dropdown-item" data-shape="rectangle" href="#">rectangle</a>
                    <a class="dropdown-item" data-shape="circle" href="#">circle</a>
                    <a class="dropdown-item" data-shape="oval" href="#">oval</a>
                    <a class="dropdown-item" data-shape="triangle-up" href="#">triangle</a>
                    <a class="dropdown-item" data-shape="star-five" href="#">star</a>
                    <a class="dropdown-item" data-shape="hexagon" href="#">hexagon</a>
                    <a class="dropdown-item" data-shape="heart" href="#">heart</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 m-b-2">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Colour
                </button>
                <div class="dropdown-menu" id="colors" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" data-color="red" href="#">red</a>
                    <a class="dropdown-item" data-color="blue" href="#">blue</a>
                    <a class="dropdown-item" data-color="green" href="#">green</a>
                    <a class="dropdown-item" data-color="yellow" href="#">yellow</a>
                    <a class="dropdown-item" data-color="purple" href="#">purple</a>
                    <a class="dropdown-item" data-color="orange" href="#">orange </a>
                    <a class="dropdown-item" data-color="turquoise" href="#">turquoise</a>
                    <a class="dropdown-item" data-color="pink" href="#">pink</a>
                    <a class="dropdown-item" data-color="black" href="#">black</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'particles/footer.php'; ?>
