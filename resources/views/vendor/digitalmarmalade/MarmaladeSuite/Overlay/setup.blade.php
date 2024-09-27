<div id="overlayManager" style="display: none;"></div>

<script>
    
    var app = window.app || {};
    app.digitalmarmalade = app.digitalmarmalade || {};
    

    app.digitalmarmalade.overlayManager = {
        
        hideLast: function() {
            var stack = this.getOverlayStack();
            if (stack.length) {
                stack[stack.length -1].hide();
                return true;
            } else {
                return false;
            }
        },
        
        hideAll: function() {
            var stack = this.getOverlayStack();
            $.each(stack, function(i, stackItem) {
                stackItem.hide();
            });
        },
        
        getOverlayManager: function() {
            var overlayManager = $('#overlayManager');
            if (overlayManager.data('overlays') === undefined) {
                overlayManager.data('overlays', {});
            }
            if (overlayManager.data('overlayStack') === undefined) {
                overlayManager.data('overlayStack', []);
            }
            
            return overlayManager;
        },
        
        addOverlay: function(overlay) {
            var overlays = this.getOverlays();
            overlays[overlay.getName()] = overlay;
            this.getOverlayManager().data('overlays', overlays);
        },
        
        getOverlays: function() {
            return this.getOverlayManager().data('overlays');
        },
        
        getOverlayStack: function() {
            return this.getOverlayManager().data('overlayStack');
        },
        
        setOverlayStack: function(overlayStack) {
            this.getOverlayManager().data('overlayStack', overlayStack);
        },
        
        setOverlays: function(overlays) {
            this.getOverlayManager().data('overlays', overlays);
        },
        
        addToOverlayStack: function(overlay) {
            var stack = this.getOverlayStack();
            stack.push(overlay);
            this.setOverlayStack(stack);
        },
        
        removeFromOverlayStack: function(overlay) {
            var stack = this.getOverlayStack();
            var newStack = [];
            $.each(stack, function(i, stackItem) {
                if (overlay.getName() !== overlay.getName()) {
                    newStack.push(stackItem);
                }
            });
            this.setOverlayStack(newStack);
        },

        getOverlay: function(name) {
            if (this.getOverlays()[name] !== undefined) {
                return this.getOverlays()[name];
            } else {
                return false;
            }
        }
    }

    app.digitalmarmalade.overlay = function(overlayContainer) {
        
        var hideEvent = 'hide.overlay';
        var showEvent = 'show.overlay';

        var self = this;

        this.getContainer = function() {
            return $(overlayContainer);
        };

        this.show = function() {
            $(overlayContainer)
                .addClass('overlay-visible')
                .trigger(showEvent);
            app.digitalmarmalade.overlayManager.addToOverlayStack(this);
        };

        this.hide = function() {
            $(overlayContainer)
                .removeClass('overlay-visible')
                .trigger(hideEvent);
            app.digitalmarmalade.overlayManager.removeFromOverlayStack(this);
        };

        this.getName = function() {
            return $(overlayContainer).data('name');
        };

        this.getId = function() {
            return $(overlayContainer).attr('id');
        };

        var addToOverlayManager = function() {
            app.digitalmarmalade.overlayManager.addOverlay(self);
        };

        if ($(overlayContainer).data('overlay') !== undefined) {
            return false;
        } else {
            $(overlayContainer)
                .data('overlay', this)
                .on('click', '#close' + this.getId(), function(event) {
                    event.preventDefault();
                    self.hide();
                })
                .appendTo($('#overlayWrapper'));
                
            addToOverlayManager();
        }

    };
    
    ($(function() {
        $('.overlay-container').each(function(i, overlayContainer) {
            new app.digitalmarmalade.overlay(overlayContainer);
        });
    }));


    
</script>