<style scoped>
    .button-secondary {
        color: white;
        border-radius: 4px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        background: rgb(66, 184, 221);
    }
</style>

<!--<div class="pure-u-1">-->
<form class="pure-form pure-form-stacked" action="welcome" method="post">
    <fieldset>
<!--        <div class="pure-u-1 pure-u-md-1-3">
            <label for="first-name">First Name</label>
            <input id="first-name" class="pure-u-23-24" type="text">
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <label for="last-name">Last Name</label>
            <input id="last-name" class="pure-u-23-24" type="text">
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <label for="email">E-Mail</label>
            <input id="email" class="pure-u-23-24" type="email" required>
        </div>
-->
        <div class="pure-u-1 pure-u-md-1-2">
            <input name="name" type="text" placeholder="Enter your full name here" required class="pure-input-1">
        </div>
        <div class="pure-u-1 pure-u-md-1-2">
            <button type="submit" class="pure-button button-secondary pure-input-1">I'm In!</button>
        </div>
        <div class="pure-u-1 pure-u-md-1">Build number: <b><?php $this->buildVersion(); ?></b></div>
    </fieldset>
</form>
<!--</div>-->

<!--<div class="pure-u-1">Build number: <b>--><?php //$this->buildVersion(); ?><!--</b></div>-->
