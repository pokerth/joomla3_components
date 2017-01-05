<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_pthranking
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

$document = JFactory::getDocument();
$document->addScript(JUri::root() . 'media/com_pthranking/js/pthreg.js?ts=20170105_0455');
$document->addStyleSheet(JUri::root() . 'media/com_pthranking/css/pthranking.css');
$uri = JUri::getInstance();
$base = $uri->toString(array('scheme', 'user', 'pass', 'host', 'port'));
$url = $base . JRoute::_('index.php?option=com_pthranking&view=activategame', false);
?>

<div class="rt-flex-container">
    <div class="rt-grid-7">
        <div class="rt-block">
            <div id="errors"></div>
        <form action="" method="post" id="pthsignup-form">
        <fieldset class="userdata">
            <p id="form-signup-email">
                <label for="pthemail">E-Mail <sup class="mandatory">*)</sup>:</label>
                <input id="pthranking-email" type="text" name="pthemail" class="inputbox" size="16">
            </p>
            <p id="form-signup-username">
                <label for="pthusername">Username <sup class="mandatory">*)</sup>:</label>
                <input id="pthranking-username" type="text" name="pthusername" class="inputbox" size="16">
            </p>
            <p id="form-signup-password">
                <label for="pthpassword">Password <sup class="mandatory">*)</sup>:</label>
                <input id="pthranking-password" type="password" name="pthpassword" class="inputbox" size="16">
            </p>
            <p id="form-signup-password2">
                <label for="pthpassword2">Password repeat <sup class="mandatory">*)</sup>:</label>
                <input id="pthranking-password2" type="password" name="pthpassword2" class="inputbox" size="16">
            </p>
            <p id="form-signup-gender">
                <label for="pthgender">Gender:</label>
                <select id="pthranking-gender" name="pthgender" class="inputbox">
                    <option value="">---</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select>
            </p>
            <p id="form-signup-country">
                <label for="pthcountry">Country:</label>
                <select id="pthranking-country" name="pthcountry" class="inputbox">
                    <option value="">---</option>
                    <?php foreach(PthRankingDefines::$country_iso as $country => $iso):?>
                    <option value="<?php echo $iso ?>"><?php echo $country ?></option>
                    <?php endforeach; ?>
                </select>
            </p>
            <p>
                <div id="dynamic_recaptcha"></div>
            </p>
            <input type="hidden" name="submit" value="true" />
            <input type="submit" name="pthbtn" id="pthreg" class="button" value="Register">
         </fieldset>
        </form>
        <p>*) mandatory fields</p>
        </div>
    </div>
    <div class="rt-grid-5">
        <div class="rt-block">
        <h3>Explanation of new login-/ranking registration:</h3>
        <p>Here you can register for the new login-/ranking system of pokerth.net</p>
        <p>This registration page is for players who don't yet have a forum account.</p>
        <p>If your chosen username/email-address is already taken you will get a hint.</p>
        <p>After clicking on the Register Button you will get an email in order to validate your email-address.<br />
        After successfully validating your email-address you will have access to the game with your credentials in the moment we switch the game-server
        to the new login-system (info in the forum will follow).<br />
        A forum-account will be created with this registration in parallel too - so you can just login to the forum after the email validation.
        </p>
        <p>For those who already have a forum-account, you can activate your account for the game <a href="<?php echo $url ?>">here</a> (you have to be logged in).</p>
        </div>
    </div>
</div>


