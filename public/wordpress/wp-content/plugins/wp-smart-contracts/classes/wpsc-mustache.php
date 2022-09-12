<?php

if( ! defined( 'ABSPATH' ) ) die;

/**
 * Include Mustache Lib into PHP and JS
 */

// Load PHP Mustache
require_once("vendor/autoload.php");


// JS Mustache Logic

new WPSC_Mustache();

class WPSC_Mustache {

    function __construct() {

        // Load admin scripts
        add_action('admin_enqueue_scripts' , [$this, 'loadMustacheJS'], 10, 2 );
        add_action('in_admin_footer', [$this, 'loadTemplatesForCurrentPage']);

        // Load FE scripts
        add_action('wp_enqueue_scripts' , [$this, 'loadMustacheJS'], 10, 2 );
        add_action('wp_footer', [$this, 'loadTemplatesForCurrentPageFE']);

    }

    // Enqueue Mustache JS
    public function loadMustacheJS($hook) {
        
        // enqueue mustache library
        wp_enqueue_script( 'wp-smart-contracts-mustache', dirname( plugin_dir_url( __FILE__ ) ) . '/assets/js/mustache.min.js' );

    }

    // this will load the templates used in admin
    public function loadTemplatesForCurrentPage($hook) {

        // post edition and creation
        if ( 'post.php' != $hook and 'post-new.php' != $hook) {
            $this->showMustacheTemplates();
        } else {
            $this->showTemplate("wp-admin-bar");
        }

    }

    public function showMustacheTemplates() {
        // messages and warning
        $this->showTemplate("msg-box");
        // disclaimers and deploy conditions
        $this->showTemplate("deploy-warning-message");
        // Token Confirmation modal
        $this->showTemplate("token-info");
        // Crowdfunding Confirmation modal
        $this->showTemplate("crowdfunding-info");
        // ICO Confirmation modal
        $this->showTemplate("ico-info");
        $this->showTemplate("ico-info-ico");
        $this->showTemplate("ico-info-token");
        // Deploy animation
        $this->showTemplate("deploy-animation");
        // Connect Metamask button for Msg box 
        $this->showTemplate("wp-admin-bar-connect-ethereum");        
        // admin bar
        $this->showTemplate("wp-admin-bar");
    }

    // this will load the templates used in frontend
    public function loadTemplatesForCurrentPageFE() {

        // wpsc_coin shortcode JS templates
        if (get_post_field( 'post_type', get_the_ID() ) == "coin" or 
            get_post_field( 'post_type', get_the_ID() ) == "crowdfunding" or 
            get_post_field( 'post_type', get_the_ID() ) == "ico" or 
            has_shortcode( get_post_field('post_content', get_the_ID()), 'wpsc_coin' ) or 
            has_shortcode( get_post_field('post_content', get_the_ID()), 'wpsc_crowdfunding' ) or 
            has_shortcode( get_post_field('post_content', get_the_ID()), 'wpsc_ico' )
        ) {
            $this->showTemplate("coin-view-block-explorer-rows");
            $this->showTemplate("coin-view-block-explorer-loader");
            $this->showTemplate("coin-view-block-explorer-balance");
            $this->showTemplate("coin-view-block-explorer-role");
            $this->showTemplate("coin-view-block-explorer-txid");
            $this->showTemplate("coin-view-block-explorer-txid-detail");
            $this->showTemplate("msg-box");
            $this->showTemplate("crowdfunding-info");
            $this->showTemplate("ico-info");
            $this->showTemplate("ico-info-ico");
            $this->showTemplate("ico-info-token");
            $this->showTemplate("crowd-view-request");
            $this->showTemplate("crowd-view-request-finalized");
        }

    }

    // load the translation texts for JS
    private function loadTranslationsForTag($tag) {

        $json = false;

        switch ($tag) {
            case 'wp-admin-bar':
                $json = json_encode([
                    'METAMASK_NO' => __('Unable to connect to the Ethereum Network. Please install and run MetaMask.', 'wp-smart-contracts'),
                    'METAMASK_NO_SHORT' => __('MetaMask not found.', 'wp-smart-contracts'),
                    'NETWORK_ETHEREUM' => __('Main Ethereum Network', 'wp-smart-contracts'),
                    'NETWORK_ROPSTEN' => __('Ropsten Test Network', 'wp-smart-contracts'),
                    'NETWORK_KOVAN' => __('Kovan Test Network', 'wp-smart-contracts'),
                    'NETWORK_RINKEBY' => __('Rinkeby Test Network', 'wp-smart-contracts'),
                    'METAMASK_YOU_SELECTED' => __('You have selected', 'wp-smart-contracts'),
                    'METAMASK_NOT_LOGGED_IN' => __('but looks like you are not logged in with MetaMask, please Log In if you want to deploy Smart Contracts', 'wp-smart-contracts'),
                    'METAMASK_YOU_ARE_CONNECTED' => __('You are connected to', 'wp-smart-contracts'),
                    'METAMASK_WITH_ACCOUNT' => __('with the account', 'wp-smart-contracts'),
                    'ERROR' => __('ERROR, PLEASE CONNECT TO METAMASK', 'wp-smart-contracts'),
                    'METAMASK_NOT_LOGGED_IN' => __('Do you see a "Connect to Ehereum Network" in WP admin bar? if so, click there to connect. Are you logged in to Metamask? if not, please log in. If the error persist try reloading this page.', 'wp-smart-contracts'), 
                    'NETWORK_ERROR' => __("Network error", 'wp-smart-contracts'),
                    'UNKNOWN_NETWORK' => __("Unknown network selected", 'wp-smart-contracts'),
                    'TRANSIENT_CACHE' => __("Transient Cache", 'wp-smart-contracts'),
                    'TRANSIENT_CACHE_FLUSHED' => __("Transient Cache flushed", 'wp-smart-contracts'),
                    'FOX' => plugins_url( "assets/img/metamask-fox.svg", dirname(__FILE__) ),
                    'CONNECT_WITH_METAMASK' => __('Connect to Ethereum Network', 'wp-smart-contracts'),
                    'WPST_LOGO' => plugins_url( "assets/img/wp-smart-token.png", dirname(__FILE__) ),
                    'AUTHORIZE_WPST' => __("Authorize the use of WPST funds", 'wp-smart-contracts'),
                    'DEPLOY_USING_WPST' => __("Deploy using WP Smart Tokens", 'wp-smart-contracts'),
                    'ETHEREUM_DEPLOY' => __('Ethereum Network Deploy', 'wp-smart-contracts'),
                    'ETHEREUM_DEPLOY_DESC' => __('Are you ready to deploy your Coin to the currently active Ethereum Network?', 'wp-smart-contracts'),
          
                ]);
                break;
            case 'deploy-warning-message':
                $json = json_encode([
                    'ARE_YOU_USING_MAINNET' => __('Please make sure you fully understand the following:', 'wp-smart-contracts'),
                    'DEPLOY_COST_MONEY' => __('I understand that deploying a contract in the Main Ethereum Network can cost me real money (in Ether).', 'wp-smart-contracts'),
                    'FEES_AND_GAS_EXPENSES' => __('I understand what are the fees and gas expenses for deploying a contract.', 'wp-smart-contracts'),
                    'WPST_DISCLAIMER' => __("I understand that I am going to Authorize WP Smart Contracts factory to spend my WPST tokens deploying contracts", 'wp-smart-contracts'),
                    'FEES_AND_GAS_EXPENSES_WPST' => __("I understand what are the fees and gas expenses of this operation.", 'wp-smart-contracts'),
                    'ACTION_IRREVERSIBLE' => __('I understand that this action is irreversible.', 'wp-smart-contracts'),
                    'ACCEPT_TERMS' => __('I accept the terms of service explained here.', 'wp-smart-contracts'),
                    'DEPLOY_TAKES_TIME' => __('Deploy can take several minutes (in any network used). Please don\'t cancel this operation once initiated.', 'wp-smart-contracts'),
                    'FOOTER' => __('If you are not sure of what you are doing click <strong>Cancel</strong> and learn more in the tutorials section before proceeding', 'wp-smart-contracts'),
                    'MANDATORY_FIELD' => __("Mandatory Field", 'wp-smart-contracts'),
                    'WRITE_CONTRACT_ADDRESS' => __("Please write the contract address", 'wp-smart-contracts'),
                    'CONTRACT_ADDRESS_BAD_FORMAT' => __("Invalid address", 'wp-smart-contracts'),
                    'WRONG_TYPE' => __("Wrong Type or Value", 'wp-smart-contracts'),
                    'PLEASE_ACCEPT_TERMS' => __('To deploy please accept all the terms and conditions, otherwise click "Cancel"', 'wp-smart-contracts'), 
                    'CONFIRM' => __('I have read, understand, and agree to the above statements.', 'wp-smart-contracts'), 
                    'PLEASE_SELECT_FLAVOR' => __('Please select a flavor.'),
                    'FILL_DEFINITION' => __('Please fill in all definition fields (name, symbol, decimals and supply)', "wp-smart-contracts"), 
                    'FILL_DEFINITION2' => __('Please fill in all definition fields (name, symbol, decimals and rate)', "wp-smart-contracts"), 
                    'FILL_WALLET' =>  __('Please fill in the wallet address', 'wp-smart-contracts'), 
                    'BLUEMOON_UNSTOP' =>  __('It is strongly recommended that you set a way of finalizing the ICO, it can be as a hardcapped or timed ICO. Are you sure you want continue without setting a hardcap or a timed option?', 'wp-smart-contracts'), 
                    'POSITIVE_NUMBER' => __('It must be a positive number', 'wp-smart-contracts'), 
                    'TIMED_DATES' => __('Error in Timed Options', 'wp-smart-contracts'),
                    'TIMED_DATES_WRONG' => __('Please check that opening and closing dates are set and that closing date is greater than the opening date', 'wp-smart-contracts'),
                    'DECIMAL_NUMBER' => __('Decimals must be a number, greater than or equal than 0 or less than 18.', 'wp-smart-contracts'), 
                    'INITIAL_SUPPLY_NUMBER' => __('Initial supply must be a number', 'wp-smart-contracts'), 
                    'HARD_CAP_NUMBER' => __('Hard cap must be a number greater than zero', 'wp-smart-contracts'), 
                    'RATE_NUMBER' => __('Rate must be a positive number', 'wp-smart-contracts'), 
                    'CAP_TOKEN_NUMBER' => __('Mintable Cap must be 0 for unlimited cap or positive number for a limited cap', 'wp-smart-contracts'), 
                    'TOTAL_SUPPLY_NUMBER' => __('Initial supply must be a number.', 'wp-smart-contracts'), 
                    'MINTABLE_CAP_NUMBER' => __('If the token is mintable, the mintable cap must be a number greater or equal than 0', 'wp-smart-contracts'),
                ]);
                break;
            case 'deploy-animation':
                $json = json_encode([
                    'DEPLOY_IN_PROGRESS' => __('Transaction in progress', 'wp-smart-contracts'), 
                    'CLICK_CONFIRM' => __('If you agree and wish to proceed, please click "CONFIRM" transaction in the Metamask Window, otherwise click "REJECT".', 'wp-smart-contracts'), 
                    'PLEASE_PATIENCE' => __('Please be patient. It can take several minutes. Don\'t close or reload this window.', 'wp-smart-contracts'),
                    'ANIMATED_GIF' => dirname( plugin_dir_url( __FILE__ ) ) . '/assets/img/deploy-identicon.gif',
                ]);
                break;
            case "token-info":
                $json = json_encode([
                    'IMG_URL' => dirname( plugin_dir_url( __FILE__ ) ) . '/assets/img/',
                    'SYMBOL'  => __('Symbol', 'wp-smart-contracts'), 
                    'NAME'  => __('Name', 'wp-smart-contracts'), 
                    'DECIMALS'  => __('Decimals', 'wp-smart-contracts'), 
                    'INITIAL_SUPPLY'  => __('Initial Supply', 'wp-smart-contracts'), 
                    'BURNABLE'  => __('Burnable', 'wp-smart-contracts'), 
                    'MINTABLE'  => __('Mintable', 'wp-smart-contracts'), 
                    'MAX_CAP'  => __('Max. cap', 'wp-smart-contracts'), 
                    'PAUSABLE'  => __('Pausable', 'wp-smart-contracts'),
                ]);
                break;
            case "crowdfunding-info":
            case "ico-info":
            case "ico-info-ico":
            case "ico-info-token":
                $json = json_encode([
                    'IMG_URL' => dirname( plugin_dir_url( __FILE__ ) ) . '/assets/img/',
                    'ERROR2' => __('Error', 'wp-smart-contracts'),
                    'NO_CONTRACT' => __('No contract found', 'wp-smart-contracts'),
                    'WRITE_AMOUNT' => __("Please specify a valid amount greater than zero", 'wp-smart-contracts'),
                    'WRITE_ADDRESS' => __("Please specify a valid address in the \"Destination address\" field", 'wp-smart-contracts'),
                    'WRITE_DESC' => __("Please specify a description in the \"Add a description\" field", 'wp-smart-contracts'),
                    'METAMASK_ERROR' => __('Unable to connect to the Ethereum Network. Please install and run MetaMask.', 'wp-smart-contracts'),
                    'WRONG_NETWORK' => __('Looks like you are connected to a different network.', 'wp-smart-contracts'),
                    'ACCOUNT_NOT_FOUND' => __('Do you see a "Connect to Ehereum Network" in WP admin bar? if so, click there to connect. Are you logged in to Metamask? if not, please log in. If the error persist try reloading this page.', 'wp-smart-contracts'), 
                    'THANKS' => __('Thanks for your contribution!', 'wp-smart-contracts'),
                    'CONTRIBUTION_DONE' => __('Your contribution was completed', 'wp-smart-contracts'),
                    'CLOSE' => __('Close', 'wp-smart-contracts'),
                    'APPROVAL_DONE' => __('Your approval was successfully completed.', 'wp-smart-contracts'),
                    'FINALIZATION_DONE' => __('Your request was successfully finalized', 'wp-smart-contracts'),
                    'TO' => __('To', 'wp-smart-contracts'),
                    'APPROVE' => __('Approve', 'wp-smart-contracts'),
                    'FINALIZE' => __('Finalize', 'wp-smart-contracts'),
                    'TRANSFERRED' => __('Transferred', 'wp-smart-contracts'),
                    'APPROVERS' => __('Approvers', 'wp-smart-contracts'),
                    'APPROVERS_LABEL' => __('Approvers Percentage', 'wp-smart-contracts'),
                    'MINIMUM_LABEL' => __('Minimum', 'wp-smart-contracts'),

                    'HARD_CAPPED_LABEL' => __('Hard Capped', 'wp-smart-contracts'),
                    'PAUSABLE_LABEL' => __('Pausable', 'wp-smart-contracts'),
                    'TIMED_LABEL' => __('Timed', 'wp-smart-contracts'),
                    'SYMBOL_LABEL' => __('Symbol', 'wp-smart-contracts'),
                    'NAME_LABEL' => __('Name', 'wp-smart-contracts'),
                    'SUPPLY_LABEL' => __('Initial Supply', 'wp-smart-contracts'),
                    'RATE_LABEL' => __('Rate', 'wp-smart-contracts'),
                    'WALLET_LABEL' => __('Wallet', 'wp-smart-contracts'),
                
                    'INFURA_API_KEY' => WPSC_helpers::valArrElement(
                        isset($infura)?$infura:null, 
                        "infura_api_key"
                    )?trim($infura["infura_api_key"]):"",
                    'INFURA_MNEMONIC' => WPSC_helpers::valArrElement(
                        isset($infura)?$infura:null, 
                        "infura_mnemonic"
                    )?trim($infura["infura_mnemonic"]):"",
                ]);
                break;
            case "crowd-view-request":
            case "crowd-view-request-finalized":
                $infura = get_option('etherscan_api_key_option');
                $json = json_encode([
                    'TO' => __('To', 'wp-smart-contracts'),
                    'APPROVE' => __('Approve', 'wp-smart-contracts'),
                    'FINALIZE' => __('Finalize', 'wp-smart-contracts'),
                    'TRANSFERRED' => __('Transferred', 'wp-smart-contracts'),
                    'APPROVERS' => __('Approvers', 'wp-smart-contracts'),
                    'INFURA_API_KEY' => trim($infura["infura_api_key"]),
                    'INFURA_MNEMONIC' => trim($infura["infura_mnemonic"]),
                ]);
                break;
            case "coin-view-block-explorer-balance":
                $json = json_encode([
                    'BALANCE' => __('Balance', 'wp-smart-contracts'),
                    'ADD_MINTER' => __('Add Minter Role', 'wp-smart-contracts'),
                    'ADD_PAUSER' => __('Add Pauser Role', 'wp-smart-contracts'),
                    'PAUSE' => __('Pause', 'wp-smart-contracts'),
                    'CANCEL' => __('Cancel', 'wp-smart-contracts'),
                    'FILTERED' => __('Filtered by', 'wp-smart-contracts'),
                    'ERROR' => __('Error search data field', 'wp-smart-contracts'),
                    'NOT_VALID' => __('It doesn\'t look as a valid address or transaction ID', 'wp-smart-contracts'),
                    'ERROR2' => __('Error', 'wp-smart-contracts'),
                    'NOT_VALID_ETH_ADDRESS' => __('This is not a valid Ethereum address', 'wp-smart-contracts'),
                    'NO_RESULTS' => __('No transactions found', 'wp-smart-contracts'),
                    'FAILED' => __('FAILED', 'wp-smart-contracts'),
                    'CONFIRMED' => __('CONFIRMED', 'wp-smart-contracts'),
                    'TRANSFER' => __('TRANSFER', 'wp-smart-contracts'),
                    'TRANSFER_FROM' => __('TRANSFER FROM', 'wp-smart-contracts'),
                    'MINT' => __('MINT', 'wp-smart-contracts'),
                    'BURN' => __('BURN', 'wp-smart-contracts'),
                    'BURN_FROM' => __('BURN FROM', 'wp-smart-contracts'),
                    'APPROVE' => __('APPROVE', 'wp-smart-contracts'),
                    'RESUME' => __('RESUME', 'wp-smart-contracts'),
                    'PAUSE' => __('PAUSE', 'wp-smart-contracts'),
                    'CLICK_TO_FILTER' => __('Click to filter', 'wp-smart-contracts'),
                    'ALLOWANCE_TO_SPEND' => __("Your account has an allowance to spend from this account of:", 'wp-smart-contracts'),
                    'LATEST' => __("Latest account transactions", 'wp-smart-contracts'),
                    'ALL' => __("All transactions", 'wp-smart-contracts'),
                    'DETAIL' => __("Transaction detail", 'wp-smart-contracts'),
                    'WRITE_ADDRESS' => __("Please specify a valid address in the \"To address\" field", 'wp-smart-contracts'),
                    'WRITE_ADDRESS_FROM' => __("Please specify a valid address in the \"From address\" field", 'wp-smart-contracts'),
                    'WRITE_AMOUNT' => __("Please specify a valid amount greater than zero", 'wp-smart-contracts'),
                    'METAMASK_ERROR' => __('Unable to connect to the Ethereum Network. Please install and run MetaMask.', 'wp-smart-contracts'),
                    'WRONG_NETWORK' => __('Looks like you are connected to a different network.', 'wp-smart-contracts'),
                    'ACCOUNT_NOT_FOUND' => __('Do you see a "Connect to Ehereum Network" in WP admin bar? if so, click there to connect. Are you logged in to Metamask? if not, please log in. If the error persist try reloading this page.', 'wp-smart-contracts'), 
                    'NO_CONTRACT' => __('No contract found', 'wp-smart-contracts'),
                    'TRANSFER_CONFIRM' => __('Are you sure you want to transfer the specified amount to this address?', 'wp-smart-contracts'),
                    'APPROVE_CONFIRM' => __('Are you sure you want to approve the specified amount to this address?', 'wp-smart-contracts'),
                    'MINT_CONFIRM' => __('Are you sure you want to create the specified amount of tokens and add them to this address?', 'wp-smart-contracts'),
                    'BURN_CONFIRM' => __('Are you sure you want to destroy the specified amount of tokens from your account?', 'wp-smart-contracts'),
                    'TXID_ERROR_MESSAGE' =>  __('An error occurred processing this transaction', 'wp-smart-contracts'),
                    'IS_MINTER' =>  __('Minter', 'wp-smart-contracts'),
                    'IS_PAUSER' =>  __('Pauser', 'wp-smart-contracts'),
                    'BURN_FROM_CONFIRM' => __('Are you sure you want to destroy previously approved from this account?', 'wp-smart-contracts'),
                    'PAUSE_CONFIRM' => __('Are you sure you want to pause all the token activity?', 'wp-smart-contracts'),
                    'RESUME_CONFIRM' => __('Are you sure you want to resume all the token activity?', 'wp-smart-contracts'),
                    'ADD_PAUSER_CONFIRM' => __('Are you sure you give this account the priviledge to pause token activity?', 'wp-smart-contracts'),
                    'ADD_MINTER_CONFIRM' => __('Are you sure you give this account the priviledge to create new tokens?', 'wp-smart-contracts'),
                    'RENOUNCE_PAUSER_CONFIRM' => __('Are you sure you want to remove your pauser privilege from your account?', 'wp-smart-contracts'),
                    'RENOUNCE_MINTER_CONFIRM' => __('Are you sure you want to remove your minter privilege from your account?', 'wp-smart-contracts'),
                    'RENOUNCE_PAUSER' => __('Renounce Pauser', 'wp-smart-contracts'),
                    'CONTRACT_CREATION' => __('Contract Creation', 'wp-smart-contracts'),
                    'ICO_BUY_TOKENS' => __('ICO Buy Tokens', 'wp-smart-contracts'),
                    'ICO_DIRECT_TRANSFER' => __('ICO Direct Transfer', 'wp-smart-contracts'),
                    'RENOUNCE_MINTER' => __('Renounce Minter', 'wp-smart-contracts'),
                ]);
                break;

        }

        if ($json) {

            $wpsc_js_object_name = self::createJSObjectNameFromTag($tag);

            ?>
            <script type='text/javascript'>
            /* <![CDATA[ */
            var <?=$wpsc_js_object_name?> = <?=$json?>;
            /* ]]> */
            </script>
            <?php 

//            echo $wpsc_js_object_name;
        }
    }

    // create a JS object name,
    // i.e. turns wp-admin-bar into WPSC_WP_ADMIN_BAR
    static public function createJSObjectNameFromTag($tag) {
        return 'WPSC_' . strtoupper(str_replace('-', '_', $tag));
    }

    // print the JS Mustache template
    private function showTemplate($tempid) {
        $this->loadTranslationsForTag($tempid);
        echo '<script id="'.$tempid.'" type="x-tmpl-mustache">';
        echo WPSC_Mustache::getTemplate($tempid);
        echo '</script>';
    }

    // get template content
    public static function getTemplate($tempid) {

        // set template file name
        $template = $tempid . '.mustache';

        // if template exists locally in the theme, replace it
        if ( !file_exists( $template_path = get_stylesheet_directory() . '/wpsc-views/' . $template ) ) {
            $template_path = dirname(dirname(__FILE__)) . '/views/' . $template;
        }

        return file_get_contents($template_path);

    }

}
