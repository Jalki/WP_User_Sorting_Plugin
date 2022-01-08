<?php

/*This class is for the settings options the user is allow to edit. Make sure to have an option for restore default settings!*/
if ( !class_exists( "CodeSettings" ) ){
    class CodeSettings{
        function __construct(){
            add_action('admin_menu', array($this, 'Settings') );
        }
        function Settings(){
            add_options_page('Impsyde Code Settings', 'Table Sorting Settings', 'manage_options', 'User-sort-settings-page', array($this, 'SettingsPG') );
        }
        
        function SettingsPG() {   ?>
            <div class="Title_Page">
                <h1>Settings</h1>
            </div>
            <div>
                <h2>Color</h2>
                    <div>
                        <h5>
                            Primary-Color
                        </h5>
                        <input type="range" min="1" max="8" value="1" class="slider" id="myRange">
                        <h5>
                            Secondary-Color
                        </h5>
                        <input type="range" min="1" max="8" value="1" class="slider" id="myRange">
                        <h5>
                            Font-Color
                        </h5>
                        <input type="range" min="1" max="8" value="1" class="slider" id="myRange">
                    </div>
            </div>
            <hr>
            <div>
                <h2>Spacing</h2>
                <div>
                    <h5>
                        Table Column Spacing
                    </h5>
                    <input type= "number" step="1" > <p>px</p>
                    <h5>
                        Table Row Spacing
                    </h5>
                    <input type= "number" step="1" > <p>px</p>
                </div>
            </div>
            <hr>
            <div>
                <h2>Font</h2>
            </div>
            <hr>
            <div>
                <h2>Data</h2>
                <form method = "post" action = "<php? admin_url( 'admin_url' ); ?">
                    <table id = "datatable">
                        <script >
                            
                        </script>
                    </table>
                </form>
            </div>
            <div>
                <button>
                    <h2>Restore Default Settings</h2>
                </button>
            </div>
        <?php
        }
    }
};

/*This class initialize the javascript that allows us to download the data we need and then place the data into the custom block that will show the information*/
if ( !class_exists( "Data" ) ){
    class Data
    {
        public $User_Json;
        public $results;

        function __construct(){
            add_action( 'wp_ajax_get_breweries_from_api', array( $this, 'get_users_from_api'));
            add_action( 'admin_post_nopriv_process_form', array( $this, 'process_data'));
            add_action( 'admin_post_process_form', array($this, 'process_data'));
        }

        function get_users_from_api(){
            $User_Json = wp_remote_retrive_body( wp_remote_get('https://jsonplaceholder.typicode.com/users'));
            $results = json_decode( $User_Json );

            foreach($results as $key => $value){
                echo $key . " | " . $value . "<br>";
            }

            return $results;
        }

        //Outputs to the block that has been created for our tester
        function process_data(){
            return null;
        }
    }
};

/*Creates and init classes */
/*$Data = new Data();*/
$SettingsClass = new CodeSettings();
?>



