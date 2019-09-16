<?php defined('SHIELDON_VIEW') || exit('Life is short, why are you wasting time?');
/*
 * This file is part of the Shieldon package.
 *
 * (c) Terry L. <contact@terryl.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
?>
<div class="section-title bg-glass">
    <h2>Enable</h2>
    <div class="toggle-container">
        <label class="rocker rocker-md">
            <input type="hidden" name="daemon" value="off" />
            <input type="checkbox" name="daemon" class="toggle-block" value="on" data-target="daemon-section" <?php $this->checked('daemon', true); ?> />
            <span class="switch-left"><i class="fas fa-check"></i></span>
            <span class="switch-right"><i class="fas fa-times"></i></span>
        </label>
    </div>
</div>
<div class="section-body my-0" data-parent="daemon-section">
    <table class="setting-table">
        <tr>
            <td class="r1">Data Driver</td>
            <td class="r2">
                <p>Start protecting your website by implementing Shieldon. This plugin only works when this option is enabled.</p>
                <div>
                    <div class="button-wrap">
                        <input class="radio-label" type="radio" name="driver_type" id="driver-file" value="file" <?php $this->checked('driver_type', 'file'); ?> />
                        <label class="button-label" for="driver-file">File System</label>
                        <input class="radio-label" type="radio" name="driver_type" id="driver-mysql" value="mysql" <?php $this->checked('driver_type', 'mysql'); ?> />
                        <label class="button-label" for="driver-mysql">MySQL</label>
                        <input class="radio-label" type="radio" name="driver_type" id="driver-redis" value="redis" <?php $this->checked('driver_type', 'redis'); ?> />
                        <label class="button-label" for="driver-redis">Redis</label>
                        <input class="radio-label" type="radio" name="driver_type" id="driver-sqlite" value="sqlite" <?php $this->checked('driver_type', 'sqlite'); ?> />
                        <label class="button-label" for="driver-sqlite">SQLite</label>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="r1"></td>
            <td class="r2">
                <div class="data-driver-options data-driver-options-file">
                    <div class="section-title sm bg-dot" data-parent="daemon-section">
                        <h3>File system</h3>
                    </div>
                    <div class="section-body sm" data-parent="daemon-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-7 py-2">
                                    <label>Directory</label>
                                    <input type="text" name="drivers__file__directory_path" class="form-control form-control-sm" value="<?php $this->_('drivers.file.directory_path'); ?>">
                                    <br />
                                    <p>Please fill in the absolute path of the directory where you store the data.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="data-driver-options data-driver-options-mysql">
                    <div class="section-title sm bg-dot" data-parent="daemon-section">
                        <h3>MySQL</h3>
                    </div>
                    <div class="section-body sm" data-parent="daemon-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3 py-2">
                                    <label>Host</label>
                                    <input type="text" name="drivers__mysql__host" class="form-control form-control-sm" value="<?php $this->_('drivers.mysql.host'); ?>">
                                </div>
                                <div class="col-sm-3 py-2">
                                    <label>DB Name</label>
                                    <input type="text" name="drivers__mysql__dbname" class="form-control form-control-sm" value="<?php $this->_('drivers.mysql.dbname'); ?>">
                                </div>
                                <div class="col-sm-3 py-2">
                                    <label>User</label>
                                    <input type="text" name="drivers__mysql__user" class="form-control form-control-sm" value="<?php $this->_('drivers.mysql.user'); ?>">
                                </div>
                                <div class="col-sm-3 py-2">
                                    <label>Password</label>
                                    <input type="text" name="drivers__mysql__pass" class="form-control form-control-sm" value="<?php $this->_('drivers.mysql.pass'); ?>">
                                </div>
                                <div class="col-sm-3 py-2">
                                    <label>Charset</label>
                                    <input type="text" name="drivers__mysql__charset" class="form-control form-control-sm" value="<?php $this->_('drivers.mysql.charset'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="data-driver-options data-driver-options-redis">
                    <div class="section-title sm bg-dot" data-parent="daemon-section">
                        <h3>Redis</h3>
                    </div>
                    <div class="section-body sm" data-parent="daemon-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3 py-2">
                                    <label>Host</label>
                                    <input type="text" name="drivers__redis__host" class="form-control form-control-sm" value="<?php $this->_('drivers.redis.host'); ?>">
                                </div>
                                <div class="col-sm-3 py-2">
                                    <label>Port</label>
                                    <input type="text" name="drivers__redis__port" class="form-control form-control-sm" value="<?php $this->_('drivers.redis.port'); ?>">
                                </div>
                                <div class="col-sm-3 py-2">
                                    <label>Auth</label>
                                    <input type="text" name="drivers__redis__auth" class="form-control form-control-sm" value="<?php $this->_('drivers.redis.auth'); ?>"><br />
                                    <p>Required only if a password is needed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="data-driver-options data-driver-options-sqlite">
                    <div class="section-title sm bg-dot" data-parent="daemon-section">
                        <h3>SQLite</h3>
                    </div>
                    <div class="section-body sm" data-parent="daemon-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-7 py-2">
                                    <label>Directory</label>
                                    <input type="text" name="drivers__sqlite__directory_path" class="form-control form-control-sm" value="<?php $this->_('drivers.sqlite.directory_path'); ?>">
                                    <br />
                                    <p>Please fill in the absolute path of the directory where you store the data.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
<div class="section-body my-0" data-parent="daemon-section">
    <table class="setting-table">
        <tr>
            <td class="r1">Reset Data Cycle</td>
            <td class="r2">
                <p>Clear all logs everyday 0:00 a.m. automatically. Turning this option on will improve performace.</p>
                <label class="rocker rocker-sm">
                    <input type="hidden" name="cronjob__reset_circle__enable" value="off" />
                    <input type="checkbox" name="cronjob__reset_circle__enable" class="toggle-block" value="on" <?php $this->checked('cronjob.reset_circle.enable', true); ?>>
                    <span class="switch-left"><i class="fas fa-check"></i></span>
                    <span class="switch-right"><i class="fas fa-times"></i></span>
                </label>
            </td>
        </tr>
    </table>
</div>
<div class="section-body my-0" data-parent="daemon-section">
    <table class="setting-table">
        <tr>
            <td class="r1">IP Source</td>
            <td class="r2">
                <p>Is your website behind CDN service? If you use CDN, you have to set this setting correctly; otherwise, all IP addresses from CDN servers will be banned.</p>
                <div class="container">
                    <div ckass="row">
                        <div class="col-sm-12">
                            <div class="radio-style">
                                <input name="ip_variable_source" value="REMOTE_ADDR" type="radio" id="ip-source-1" <?php $this->checked('ip_variable_source.REMOTE_ADDR', true); ?> /> 
                                <label for="ip-source-1" class="radio-label">
                                    REMOTE_ADDR
                                    <small><?php echo ($_SERVER['REMOTE_ADDR']) ?? '<i class="fas fa-times-circle text-danger"></i>'; ?></small>
                                </label> 
                            </div>
                            <div class="radio-style">
                                <input name="ip_variable_source" value="HTTP_CF_CONNECTING_IP" type="radio" id="ip-source-2" <?php $this->checked('ip_variable_source.HTTP_CF_CONNECTING_IP', true); ?> /> 
                                <label for="ip-source-2" class="radio-label">
                                    HTTP_CF_CONNECTING_IP
                                    <small><?php echo ($_SERVER['HTTP_CF_CONNECTING_IP']) ?? '<i class="fas fa-times-circle text-danger"></i>'; ?></small>
                                </label> 
                            </div>
                            <div class="radio-style">
                                <input name="ip_variable_source" value="HTTP_X_FORWARDED_FOR" type="radio" id="ip-source-3" <?php $this->checked('ip_variable_source.HTTP_X_FORWARDED_FOR', true); ?> /> 
                                <label for="ip-source-3" class="radio-label">
                                    HTTP_X_FORWARDED_FOR
                                    <small><?php echo ($_SERVER['HTTP_X_FORWARDED_FOR']) ?? '<i class="fas fa-times-circle text-danger"></i>'; ?></small>
                                </label> 
                            </div>
                            <div class="radio-style">
                                <input name="ip_variable_source" value="HTTP_X_FORWARDED_HOST" type="radio" id="ip-source-4" <?php $this->checked('ip_variable_source.HTTP_X_FORWARDED_HOST', true); ?> /> 
                                <label for="ip-source-4" class="radio-label">
                                    HTTP_X_FORWARDED_HOST
                                    <small><?php echo ($_SERVER['HTTP_X_FORWARDED_HOST']) ?? '<i class="fas fa-times-circle text-danger"></i>'; ?></small>
                                </label> 
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
<!-------------------------------------------------------------------------------------------------------------->
<div class="section-title bg-glass mt-3">
    <h2>Session Limit</h2>
    <div class="toggle-container">
        <label class="rocker rocker-md">
            <input type="hidden" name="online_session_limit__enable" value="off" />
            <input type="checkbox" name="online_session_limit__enable" class="toggle-block" value="on" data-target="online-session-limit-section" <?php $this->checked('online_session_limit.enable', true); ?> />
            <span class="switch-left"><i class="fas fa-check"></i></span>
            <span class="switch-right"><i class="fas fa-times"></i></span>
        </label>
    </div>
</div>
<div class="section-body my-0" data-parent="online-session-limit-section">
    <table class="setting-table">
        <tr>
            <td class="r1"></td>
            <td class="r2"><p>When the online user amount has reached the limit, other users not in the queue have to line up!</p></td>
        </tr>
        <tr>
            <td class="r1">Online Limit</td>
            <td class="r2">
                <input type="text" name="online_session_limit__config__count" class="form-control form-control-sm col-sm-3" value="<?php $this->_('online_session_limit.config.count'); ?>"><br />
                <p>The maximum online user limit.</p>
            </td>
        </tr>
    </table>
</div>
<div class="section-body my-0" data-parent="online-session-limit-section">
    <table class="setting-table">
        <tr>
            <td class="r1">Keep Alive Period</td>
            <td class="r2">
                <input type="text" name="online_session_limit__config__period" class="form-control form-control-sm col-sm-3" value="<?php $this->_('online_session_limit.config.period'); ?>"><br />
                <p>Unit: minute.</p>
            </td>
        </tr>
    </table>
</div>
<!-------------------------------------------------------------------------------------------------------------->
<div class="section-title bg-glass">
    <h2>Logs</h2>
    <div class="toggle-container">
        <label class="rocker rocker-md">
            <input type="hidden" name="loggers__action__enable" value="off" />
            <input type="checkbox" name="loggers__action__enable" class="toggle-block" value="on" data-target="logger-action-section" <?php $this->checked('loggers.action.enable', true); ?> />
            <span class="switch-left"><i class="fas fa-check"></i></span>
            <span class="switch-right"><i class="fas fa-times"></i></span>
        </label>
    </div>
</div>
<div class="section-body my-0" data-parent="logger-action-section">
    <table class="setting-table">
        <tr>
            <td class="r1">Action Logger</td>
            <td class="r2">
                <label>Directory</label>
                <input type="text" name="loggers__action__config__directory_path" class="form-control form-control-sm col-sm-7" value="<?php $this->_('loggers.action.config.directory_path'); ?>">
                <br />
                <p>Please fill in the absolute path of the directory where you store the data.</p>
            </td>
        </tr>
    </table>
</div>