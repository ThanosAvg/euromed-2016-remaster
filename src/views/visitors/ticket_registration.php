<!-- PAYMENT MODAL -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="paymentModalLabel">Payment options</h4>
            </div>
            <div class="modal-body">
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        PayPal
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Credit Card
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                        Bank account transfer
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Proceed to payment</button>
            </div>
        </div>
    </div>
</div>
<!-- # PAYMENT MODAL -->
<div class="container">
    <h2>Participant Registration</h2>
</div>
<hr>
<div class="container" id="forms">
    <!-- TEMPLATE FORM -->
    <form class="person-form form-inline" style="display:none">
        <div class="form-group">
            <label>Name: </label>
            <input type="text" class="form-control input-name" data-rule-required="true" required>
        </div>
        <div class="form-group">
            <label>Ticket Type: </label>
            <select class="form-control input-type" type="text" class="form-control input-name" data-rule-required="true">
                <option value="normal">Default (Full access, No Discount)</option>
                <option value="student">Student (Full Access, Discount)</option>
                <option value="workshop">Workshop only</option>
                <option value="early" disabled>Early Bird (Expired)</option>
            </select>
        </div>
        <br>
        <div class="checkbox">
            <label>
                <input type="checkbox" class="input-bag" aria-label="..."> Conference Bag - 70€
            </label>
        </div>
        <br>
        <span class="price-tag"><span>+<span class="cost">0</span>€</span></span><br><button class="btn btn-default remove-btn" type="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Remove</button>
    </form>
    <!-- # TEMPLATE FORM -->

</div>
<div class="container container-content">
    <div style="text-align: right">
        <h2 style="text-align: right"><span>Total <span id="total-cost">0</span>€</span></h2>
        <button class="btn btn-default" id="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Add Participant</button><button class="btn btn-primary" id="submit"><span class="glyphicon glyphicon-chevron-right"></span> Next</button>
    </div>
</div>
<br>
<script src="<?=PUBLIC_ROOT?>/assets/js/tickets.js" defer='defer'></script>
