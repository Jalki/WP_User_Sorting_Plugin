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
        public $UserData;
        public $UserJson;

        function __construct($UserData){

            $this->userdata = $UserData;

        }

        //This is our endpoint, which allows us to GET from the API
        public function GetUsersdata() 
        {
            $response = wp_remote_get('https://api.github.com/users/wordpress');
            try
            {
                $jsondata = json_decode( $response['body'] );

                return $this->userdata;

            }catch(Exception $ex)
            {
                $jsondata = null;
            }

            return $jsondata;
            echo $jsondata;
        }

        //Outputs to the block that has been created for our tester
    }
};

/*Creates and init classes */
$Data = new Data();
echo $Data->GetUsersdata();
$SettingsClass = new CodeSettings();
?>



