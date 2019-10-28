<!DOCTYPE HTML>
<html lang="en">
<head>
<!--Administration.html
    Author: Robert Hannah
    09/26/2019 -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="navbar.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
include 'loginchecks.php';
?>
   <style>
    body {
        background-color: #9a9b9c;
    }
    center#center {
        width: 70%;
        margin-top: 5px;
        border-radius: 10px;
        border: 2px black inset;
        background-color: #f2f2f2;
        padding: 20px;
        margin: 0 auto;
    }
    select {
        margin-right: 30px;
    }
    </style>
    <div id="navbar">
    <div class="login-container">
                <a id='sign-out' href='login.php?signout=true' style='display:none;'>Sign Out&nbsp;</a>
            <form action="login.php" method="POST" id="loginform" style="display:none;">
                <input class="login" type="text" placeholder="Username" name="username">
                <input class="login" type="password" placeholder="Password" name="password">
                <button type="submit" id="login">Login</button>
            </form>
    </div>
    <div class="topnav" style="display:none">
    <a href="javascript:void(0);" class="icon" id="icon" onclick="myFunction()" style="">
    <div class="clearfix"></div><i class="fa fa-bars fa-2x"></i>
    </a>

    <div id="myLinks">
    <a href="datamaintainence.php">Data Maintainence</a>
    </div>
    </div>
    <ul class="effect" id="effect" style="display:none">
            <li><a class="active" href="Index.php" id="droplink">Homepage</a></li>
      <li><a class="Active" href="admincontrolpanel.php">Control Panel</a></li>
        <li><a class="Active" href="adminvieworders.php">View Orders</a></li>
    </ul>
    </div>
</head>
<body>

<center id="center">
<fieldset>
<label>Database Option </label><br />
<select id = "opt" style="margin:0 auto;">
    <option disabled selected value></option>
  <option value="Add">Add</option>
  <option value="Delete">Delete</option>
  <option value="Change">Change</option>
</select>
<br />
<br />
<div id="orderid" style="display:none;">
<label>Order Id: </label><br>
    <input type="text" name="Cost" id="Cost" value="8999" size="30" />
</div>
<div id="neworder" style="display:none;">
<p style="font-size: 25px;border-bottom:1px solid black;">New Order</p><br>
</div>
<br />
<div id="add" style='display:none;'>
    <label style="margin-bottom: 50px;">Customer ID: </label>
        <input type="text" name="Cost" id="id" value="" size="10" /><br>
        <label>Model: </label>
        <select id = "model">
            <option value="lightning">Lightning (96v)</option> <!-- 8,999 -->
            <option value="sparkle">Sparkle (48v)</option> <!-- 5,999 -->
            <option value="thunder">Thunder (192v)</option> <!-- 10,999 -->
            <option value="firefly">Firefly (24v)</option> <!-- 3,999 -->
        </select>
        <label>Color: </label>
        <select id = "color">
            <option value="black/white">Black & White</option>
            <option value="yellow/red">Yellow & Red (+ $250)</option>
        </select>
        <label style="margin-bottom: 30px;">Graphics: </label>
        <select id = "graphics">
            <option value="no">No (No additional charge)</option>
            <option value="yes">Yes (+ $350)</option>
        </select>
        <br>
        <label>Wheels: </label>
        <select id = "wheels">
            <option value="18">18 Inch</option>
            <option value="19">19 Inch</option>
        </select>
        <label>Premium Wheels </label>
        <select id = "premium">
            <option value="no">No (No additional charge)</option>
            <option value="yes">Yes (+ $100)</option>
        </select>
        <label>Seat Type: </label>
        <select id = "seat">
            <option value="solo">Solo</option>
            <option value="standard">Standard</option>
        </select>
        <br>
        <p id="successadd" style="margin-top:30px;"></p>
</div>


<div id="change" style='display:none;'>
    <label style="margin-bottom: 50px;">Order ID: </label>
        <input type="text" name="Cost" id="changeid" value="" size="10" /><br>
        <p id="successchange" style="margin-top:10px; margin-bottom:30px;"></p>
        <div id="changestuff" style="display:none;">
        <label>Model: </label>
        <select id = "model">
            <option value="lightning">Lightning (96v)</option> <!-- 8,999 -->
            <option value="sparkle">Sparkle (48v)</option> <!-- 5,999 -->
            <option value="thunder">Thunder (192v)</option> <!-- 10,999 -->
            <option value="firefly">Firefly (24v)</option> <!-- 3,999 -->
        </select>
        <label>Color: </label>
        <select id = "color">
            <option value="black/white">Black & White</option>
            <option value="yellow/red">Yellow & Red (+ $250)</option>
        </select>
        <label style="margin-bottom: 30px;">Graphics: </label>
        <select id = "graphics">
            <option value="no">No (No additional charge)</option>
            <option value="yes">Yes (+ $350)</option>
        </select>
        <br>
        <label>Wheels: </label>
        <select id = "wheels">
            <option value="18">18 Inch</option>
            <option value="19">19 Inch</option>
        </select>
        <label>Premium Wheels </label>
        <select id = "premium">
            <option value="no">No (No additional charge)</option>
            <option value="yes">Yes (+ $100)</option>
        </select>
        <label>Seat Type: </label>
        <select id = "seat">
            <option value="solo">Solo</option>
            <option value="standard">Standard</option>
        </select>
        <br>
    </div>
        <p id="successadd" style="margin-top:30px;"></p>
</div>
<div id="delete" style='display:none;'>
    <label style="margin-bottom: 50px;">Order ID: </label>
        <input type="text" name="Cost" id="delid" value="" size="10" /><br>
    </div>
<button id="submit" style="margin-top: 15px;">Submit</button>
<p id="successdelete" style="margin-top:30px;"></p>
</center>
<div id="add">

</div>
<sl'
        },
        item10: {
            itemid:10,
            description:'18 yes',
            category:'Wheel'
        },
        item11: {
            itemid:11,
            description:'19 yes',
            category:'Wheel'
        },
        item12: {
            itemid:12,
            description:'solo',
            category:'Seat'
        },
        item13: {
            itemid:13,
            descchange').html("");
    $('#successdelete').html("");
    $('div#neworder p').text("New Order");
    $('div#neworder').show();
    $('div#add').show();
} else if(option == 'Delete') {
    $('div#neworder').show();
    $('div#changestuff').hide();
    $('#successchange').html("");
    $('#successadd').html("");
    $('div#delete').show();
    $('div#neworder p').text("Delete Order");
    $('div#change').hide();
    $('div#add').hide();
} else if(option == 'Change') {
    $('#successadd').html("");
    $('div#delete').hide();
    $('#successdelete').html("");
    $('div#neworder').show();
    $('div#neworder p').text("Change Order");
    $('div#change').show();
    $('div#add').hide();
} else {
    $('#successdelete').html("");
    $('div#changestuff').hide();
    $('#successchange').html("");
    $('#successadd').html("");
    ('div#delete').hide();
    $('div#change').hide();
    $('div#neworder').hide();
    $('div#add').hide();
}
});
$('button#submit').click(function () {
    if (option == 'Add') {
        add();
    } else if(option == 'Delete') {
        del();
    } else if(option == 'Change') {
        searchchange();
    }
});
function changeValueForDB(input) {
    var items = {
        item1: {
            itemid:1,
            description:'lightning',
            category:'Model'
        },
        item2: {
            itemid:2,
            description:'sparkle',
            category:'Model'
        },
        item3: {
            itemid:3,
            description:'thunder',
            category:'Model'
        },
        item4: {
            itemid:4,
            description:'firefly',
            category:'Model'
        },
        item5: {
            itemid:5,
            description:'black/white',
            category:'Paint Color'
        },
        item6: {
            itemid:6,
            description:'yellow/red',
            category:'Paint Color'
        },
        item7: {
            itemid:7,
            description:'yes',
            category:'Graphic'
        },
        item8: {
            itemid:8,
            description:'18 no',
            category:'Wheel'
        },
        item9: {
            itemid:9,
            description:'19 no',
            category:'Wheel'
        },
        item10: {
            itemid:10,
            description:'18 yes',
            category:'Wheel'
        },
        item11: {
            itemid:11,
            description:'19 yes',
            category:'Wheel'
        },
        item12: {
            itemid:12,
            description:'solo',
            category:'Seat'
        },
        item13: {
            itemid:13,
            description:'standard',
            category:'Seat'
        }
        };
        var keys = Object.keys(items);
        for (var key in items) {
            if (Object.values(items[key]).indexOf(input) > -1) {
                var id = items[key].itemid;
                var cat = items[key].category;
                var both = new Object();
                both[0] = id;
                both[1] = cat;
                return id;
            } else {
            }
        }
}
function add() {
    var id = $('input#id').val();
    var model_itemid = 0;
    var color_itemid = 0;
    var wheels_itemid = 0;
    var graphics_itemid = 0;
    var seat_itemid = 0;
    model_itemid = changeValueForDB($('select#model option:selected').val());
    color_itemid = changeValueForDB($('select#color option:selected').val());
    wheels_itemid = changeValueForDB($('select#wheels option:selected').val()) + " " + $('select#premium option:selected').val();
    try {
        graphics_itemid = changeValueForDB($('select#graphics option:selected').val());
    }
    catch(error) {
        graphics_itemid = 0;
    }
    if(graphics_itemid == undefined) graphics_itemid = 0;
    seat_itemid = changeValueForDB($('select#seat option:selected').val());
    console.log("you will need items " + model_itemid + "," + color_itemid + "," + wheels_itemid + "," + graphics_itemid + "," + seat_itemid);
    $.ajax({
        type:"POST",
        cache:false,
        url:"adminaddorder.php",
        data:{id:id,model:model_itemid,color:color_itemid,wheels:wheels_itemid,
        graphics:graphics_itemid,seat:seat_itemid},    // multiple data sent using ajax
        success: function (html) {
            $('p#successadd').html("");
            $('p#successadd').append(html);
        }
    });
    console.log("failure");
    return false;
}

function del() {
    var id = $('input#delid').val();
    if(!id) return;
    var r = confirm("Are you sure you want to delete this order?");
    if (r != true) {
    return;
  }
    $.ajax({
        type:"POST",
        cache:false,
        url:"admindeleteorder.php",
        data:{id:id},    // multiple data sent using ajax
        success: function (html) {
            $('p#successdelete').html("");
            $('p#successdelete').append(html);
        }
    });
    console.log("failure");
    return false;
}

function searchchange() {
    var id = $('input#changeid').val();
    if(!id) return;
    var r = confirm("Are you sure you want to delete this order?");
    if (r != true) {
    return;
  }
    $.ajax({
        type:"POST",
        cache:false,
        url:"adminchangeorder.php",
        data:{id:id},    // multiple data sent using ajax
        success: function (html) {
            if(html == 'Error') {
                $('div#changestuff').hide();
                $('p#successchange').html("");
                $('p#successchange').append("Could not find order number " + id);
                return;
            }
            $('div#changestuff').show();
            $('p#successchange').html("");
            $('p#successchange').append(html);
        }
    });
    console.log("failure");
    return false;
}
      });
</script>
</fieldset>

<footer>

<div id="footercolmn">

</div>
</footer>


<script src="resize.js"></script>
</body>
</html>