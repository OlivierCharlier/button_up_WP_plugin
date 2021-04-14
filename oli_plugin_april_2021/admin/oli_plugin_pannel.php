<?php

add_action('admin_menu', 'oli_admin');
function oli_admin(){
    add_menu_page(
                    'Button Up by OliOne',
                    'Button UP!',
                    'activate_plugins',
                    'oli_plugin_pannel',
                    'render_pannel',
                    'dashicons-arrow-up-alt'
                );
};

/*call admin panel*/
function render_pannel(){
    if(isset($_POST['color_update'])){
        if(!empty($_POST['Color'])){
            update_option('color_buttonUP_OliPlugin', $_POST['Color']);
        }
    }

/*color picker*/
wp_enqueue_style( 'wp-color-picker' );
wp_enqueue_script('wp-color-picker' );
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.colorpicker').wpColorPicker();
});
</script>

<!-- admin panel config -->
<div class="wrap theme-options-page"> 
    <h1><span class="dashicons dashicons-admin-tools"></span> Plugin Button UP!</h1>
    <h2>Costumize your Button UP!</h2>
    <form action="" method="post" name="colorize">
        <p>Choice the new color of your Button UP:</p>
        <div class="">
            <input type="radio" id="Grey" name="Color" value="#292929"><span style="color:#292929"> Grey - default</span><br>
            <input type="radio" id="Green" name="Color" value="#008000"><span style="color:#008000"> Green</span><br>
            <input type="radio" id="Red" name="Color" value="#FF0000"><span style="color:#FF0000"> Red</span><br>
            <input type="radio" id="Navy" name="Color" value="#000080"><span style="color:#000080"> Navy</span><br>
            <input type="radio" id="Yellow" name="Color" value="#FFFF00"><span style="color:#FFFF00; background:#000000"> Yellow</span><br>
            <input type="radio" id="$colorValue" name="Color" value="">Your personal color: <input type="text" class="colorpicker" name="color-code" value="" data-default-color="#292929" />
        </div>
        <p class="submit">
            <input type="submit" name="color_update" value="Color it!">
        </p>
    </form>
    <p>The color is currently set to <strong>
        <?php
            if(!empty($_POST['color-code']) && empty($_POST['Color'])){
                update_option('color_buttonUP_OliPlugin', $_POST['color-code']);
            };
            $colorResult = get_option('color_buttonUP_OliPlugin');
            $colorChoice = "Grey - default";
                if($colorResult === "#292929"){
                    $colorChoice =  "Grey - default";
                }elseif($colorResult === "#27b30b"){
                    $colorChoice =  "Green";
                }elseif($colorResult === "#FF0000"){
                    $colorChoice =  "Red";
                }elseif($colorResult === "#000080"){
                    $colorChoice =  "Navy";
                }elseif($colorResult === "#FFFF00"){
                    $colorChoice =  "Yellow";
                }else{
                    $colorChoice =  "your personal color";
                }
            echo $colorChoice;
        ?></strong> with the code <strong><?= $colorResult ?></strong>.
    </p>
    <p>Look at this! Here is the look of your funny colorful "Button up!":
    <div id="button_up_demo"></div>
    <p>Your website is updated: <a href="<?php bloginfo('url'); ?>" target="_blank">check it now!</a></p>
    <p class="oli_thanks">Thank you for using my first plugin.<br><a href="https://www/olione.be" target="_blank">OliOne</a></p>
    <hr>

    <!-- demo button style -->
    <style type="text/css">
        #button_up_demo{    
            display: flex;
            align-items: center;
            justify-content: center;  
            border-radius: 15%;
            font-size:25px;
            color:#fff;
            background: <?= $colorResult ?>;
            box-shadow: 1px 1px 4px 1px rgba(255, 255, 255, 0.2);
            /* position:fixed; */
            /* right:20px; */
            /* opacity:1; */
            /* z-index:99999; */
            /* transition:all ease-in 0.2s; */
            text-decoration: none;
            height: 50px;
            width: 50px;
            /* bottom: 20px; */
        }
        #button_up_demo:before{
            content: "\25b2";
        } 
        .oli_thanks{
            margin-top: 5rem;
            text-align: right;
            font-style: italic;
            color: #50575e;
        }
    </style>
</div>
<?php
};