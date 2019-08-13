<?php
/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';
include_file('core', 'authentification', 'php');
if (!isConnect()) {
    include_file('desktop', '404', 'php');
    die();
}
?>
<form class="form-horizontal">
    <fieldset>
        <legend>
			<i class="fa fa-list-alt"></i> {{Compte Diagral}}
		</legend>
        <div class="form-group">
            <label class="col-lg-4 control-label">{{Identifiant}}</label>
            <div class="col-lg-4">
                <input class="configKey form-control" data-l1key="login" type="email" placeholder="Adresse email utilisée pour votre compte Diagral"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label">{{Mot de passe}}</label>
            <div class="col-lg-4">
                <input class="configKey form-control" data-l1key="password" type="password" placeholder="Mot de passe utilisé pour votre compte Diagral"/>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>
			<i class="fa fa-list-alt"></i> {{Configuration}}
		</legend>
        <div class="form-group">
            <label class="col-lg-4 control-label">{{Nombre de tentatives}}</label>
            <div class="col-lg-4">
                <input class="configKey form-control" data-l1key="retry" placeholder="1"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label">{{Délai entre les tentatives (secondes)}}</label>
            <div class="col-lg-4">
                <input class="configKey form-control" data-l1key="waitRetry" placeholder="5"/>
            </div>
        </div>
        </fieldset>
    <fieldset>
        <legend>
			<i class="fa fa-list-alt"></i> {{Debug}}
		</legend>
        <div class="form-group">
            <label class="col-lg-4 control-label">{{Verbose}}</label>
            <div class="col-lg-2">
                <select class="configKey form-control" data-l1key="verbose" disabled>
                    <option value="1">Enable</option>
                    <option value="0">Disable</option>
                </select>
            </div>
        </div>
  </fieldset>
</form>
