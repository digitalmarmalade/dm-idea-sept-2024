var app = window.app || {};
app.digitalmarmalade = app.digitalmarmalade || {};
app.digitalmarmalade.PageBuilder = app.digitalmarmalade.PageBuilder || {};
app.digitalmarmalade.PageBuilder.Animator = app.digitalmarmalade.PageBuilder.Animator || {};

app.digitalmarmalade.PageBuilder.Animator.animator = function () {

    var self = this;
    this.duration = 1;

    this.swapDown = function (topElement, bottomElement, callback) {
        var bothElements = $(topElement).add(bottomElement);
        addSwapStartStyle(bothElements);

        $(topElement).addClass('moving').css('top', $(bottomElement).outerHeight(true) + 'px');
        $(bottomElement).addClass('replaced').css('top', '-' + $(topElement).outerHeight(true) + 'px');

        setTimeout(function () {
            swapFinished(bothElements);
            if ($.isFunction(callback)) {
                callback();
            }
        }, this.getDuration() * 1000);
    };

    this.swapUp = function (bottomElement, topElement, callback) {
        var bothElements = $(topElement).add(bottomElement);
        addSwapStartStyle(bothElements);

        $(bottomElement).addClass('moving').css('top', '-' + $(topElement).outerHeight(true) + 'px');
        $(topElement).addClass('replaced').css('top', $(bottomElement).outerHeight(true) + 'px');

        setTimeout(function () {
            swapFinished(bothElements);
            if ($.isFunction(callback)) {
                callback();
            }
        }, this.getDuration() * 1000);
    };
            
    this.delete = function (element, callback) {
        setHeightAndRemoveMarginAndPadding($(element));

        $(element).addClass('pageBuilderAnimator deleting');

        setTimeout(function () {
            $(element)
                    .animate(
                            {
                                height: 0
                            },
                    self.getDuration() * 1000,
                            function () {
                                if ($.isFunction(callback)) {
                                    callback();
                                }
                            }
                    );
        }, 1000);
    };

    this.add = function (element, callback) {
        var naturalHeight = $(element).height();

        $(element)
                .css('height', 0)
                .css('max-height', '999999px')
                .css('min-height', 0)
                .animate(
                        {
                            height: naturalHeight + 'px'
                        },
                this.getDuration() * 1000,
                        function () {
                            removeHeightAndSetMarginAndPadding($(element));
                            
                            //if the natural height changes throughout the animation, some javascipt happened so let's just animate it again
                            if ($(element).height() !== naturalHeight) {
                                var newNaturalHeight = $(element).height();
                                $(element)
                                    .css('height', naturalHeight)
                                    .animate(
                                        {height: newNaturalHeight + 'px'},
                                        (self.getDuration() / 2 * 1000),
                                        function() {
                                            if ($.isFunction(callback)) {
                                                callback();
                                            }
                                        }
                                    );
                                
                            } else {
                                if ($.isFunction(callback)) {
                                    callback();
                                }
                            }
                        }
                );
    };

    this.setDuration = function (duration) {
        this.duration = parseFloat(duration);
        return this;
    };

    this.getDuration = function () {
        return this.duration;
    };

    var setHeightAndRemoveMarginAndPadding = function (element) {
        $(element)
                .css('min-height', '0')
                .css('max-height', '99999999px')
                .css('height', $(element).outerHeight(true))
                .css('margin-top', 0)
                .css('margin-bottom', 0)
                .css('padding-top', 0)
                .css('padding-bottom', 0);
    };

    var removeHeightAndSetMarginAndPadding = function (element) {
        $(element)
                .css('min-height', '0')
                .css('max-height', '99999999px')
                .css('height', '')
                .css('margin-top', '')
                .css('margin-bottom', '')
                .css('padding-top', '')
                .css('padding-bottom', '');
    };

    var getTransitionStyle = function () {
        return 'top ' + (self.getDuration() / 2).toFixed(2) + 's ease ' + (self.getDuration() / 4).toFixed(2) + 's';
    };

    var addSwapStartStyle = function (element) {
        element
                .css('transition', getTransitionStyle())
                .css('animation-duration', self.getDuration() + 's')
                .css('top', '0px')
                .addClass('pageBuilderAnimator');
    };

    var swapFinished = function (element) {
        $(element)
                .removeClass('pageBuilderAnimator moving replaced')
                .css('transition', '')
                .css('animation-duration', '')
                .css('top', '');
    };


};
