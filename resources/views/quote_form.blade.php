<div class="alert alert-danger print-error-msg" style="display:none">
    <ul></ul>
</div>
<form  id="quoteform" method="post">
     {{ csrf_field() }}
    <fieldset>
        <p>
            <input name="name"  type="text" placeholder="Name" id="name">
        </p>
        <p>
            <input name="number" class="number" type="text" placeholder="Telefonnummer" id="number">
        </p>
        <p>
            <input name="email"  class="required email" type="text" placeholder="Email Adresse" id="email">
        </p>
        <p class="antispam">Leave this empty: <br />
            <input name="url" />
        </p>
        <p>
            <select name="subject" class="dtr-select" id="subject">
                <option value="">Business Case Auswählen</option>
                <option value="Shopentwicklung">Shopentwicklung</option>
                <option value="Migration">Migration Magento</option>
                <option value="PluginEntwicklung">Plugin Entwicklung für Magento</option>
            </select>
        </p>
        <button type="submit" class="dtr-btn-round dtr-btn-blue btn-submit">Angebot anfordern</button>
        <div id="result"></div>
    </fieldset>
</form>