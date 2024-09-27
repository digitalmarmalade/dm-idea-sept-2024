<style>
    .js-faq-wrapper {
        background-color: #fff;
        position: relative;
        padding-bottom: 0.1px;
    }
</style>

<script>
        
    ($(function() {
        var widgetViewModel = function(a) {
            var self = this;
            var animator = new app.digitalmarmalade.PageBuilder.Animator.animator();
            this.items = ko.observableArray({!! json_encode(old('settings.' . $item->getId() . '.items', $settings['items'])) !!});
            this.itemId = "{{ $item->getId() }}";
            
            this.removeQuestion = function(index, question) {
                var wrapper = self.getWrapper(index);
                animator.setDuration(0.5).delete(wrapper, function() {
                    self.items.remove(question);
                });
            };
            
            this.addQuestion = function() {
                self.items.push({question: "Question " + (this.numberOfItems() + 1), answer: "Answer " + (this.numberOfItems() + 1)});
                var wrapper = self.getWrapper(self.items().length - 1);
                animator.setDuration(0.5).add(wrapper);
            };
            
            this.moveUp = function(index, question) {
                var topWrapper = self.getWrapper(index - 1);
                var bottomWrapper = self.getWrapper(index);
                
                animator.setDuration(1).swapUp(bottomWrapper, topWrapper, function() {
                    self.items.splice(index - 1, 0, self.items.splice(index - 1, 1)[0]);
                    self.items.splice(index - 1, 0, self.items.splice(index, 1)[0]);
                });
            };
            
            this.moveDown = function(index, question, event) {
                var topWrapper = self.getWrapper(index);
                var bottomWrapper = self.getWrapper(index + 1);
                
                animator.setDuration(1).swapDown(topWrapper, bottomWrapper, function() {
                    self.items.splice(index + 1, 0, self.items.splice(index + 1, 1)[0]);
                    self.items.splice(index + 1, 0, self.items.splice(index, 1)[0]);
                });
            };
            
            this.getWrapper = function(index) {
                return $($('#widget' + self.itemId).find('.js-faq-wrapper')[index]);
            };
            
            this.numberOfItems = function() {
                return self.items().length;
            };
            
            this.hasDeleteButton = function() {
                return self.numberOfItems() > 1;
            };

        };
        
        window.ko.applyBindings(new widgetViewModel(), $('#widget{{ $item->getId() }}')[0]);
    }));
</script>

<!-- FAQs -->
<div class="panel form-panel js-pagebuilder-faqs-wrapper" data-itemId="{{ $item->getId() }}" id="widget{{ $item->getId() }}">

    <fieldset>

        <legend class="title-legend">FAQs</legend>

        <!-- ko template: { foreach: items } -->
        <div class="js-faq-wrapper">

            <div class="form-faq-header">

                <h2 class="faq-h2">Q &amp; A</h2>

                <ul class="in-panel-controls">
                    <li>
                        <a href="#" data-bind="visible: $root.hasDeleteButton(), click: $root.removeQuestion.bind(this, $index())">
                            <span class="glyph-icon flaticon-tool"></span><span class="visuallyhidden">Delete</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-bind="visible: $index() > 0, click: $root.moveUp.bind(this, $index())">
                            <span class="glyph-icon flaticon-arrows-7"></span><span class="visuallyhidden">Move up</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-bind="visible: $index() < $root.items().length - 1, click: $root.moveDown.bind(this, $index())">
                            <span class="glyph-icon flaticon-arrows-6"></span><span class="visuallyhidden">Move down</span>
                        </a>
                    </li>
                </ul>

            </div>

            <p class="standard-form-input">
                <label>Question</label>
                <input type="text" data-bind="attr: { name: 'settings[' + $root.itemId + '][items][' + $index() + '][question]'}, value: question" required />
            </p>

            <p class="standard-form-input standard-form-input--textarea">
                <label for="">Answer</label>
                <textarea  data-bind="attr: { name: 'settings[' + $root.itemId + '][items][' + $index() + '][answer]'}, value: answer" required></textarea>
            </p>

        </div>
        <!-- /ko -->

        <p class="in-page-action">
            <button type="button" class="btn btn-primary js-faq-add-question-button" data-bind="click: addQuestion">Add another Question</button>
        </p>


    </fieldset>

</div>