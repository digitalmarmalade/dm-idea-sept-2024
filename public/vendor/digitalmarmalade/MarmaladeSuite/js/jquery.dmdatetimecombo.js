//Extend the date object to get a timestamp format (YYYY-MM-DD)
Date.prototype.toDatestamp = function() {
    var month = this.getMonth() + 1; //+1 because it's 0 index
    var date = this.getDate();
    if (month < 10) { month = '0'+month.toString(); }
    if (date < 10) { date = '0'+date.toString(); }
    return this.getFullYear()+'-'+month+'-'+date;
};

Date.prototype.toDateTimestamp = function() {
    return this.toDatestamp()+' '+this.toTimeString().substr(0, 8);
};

$.fn.DMDateTimeCombo = function(options) {
    var self = this;
    
    if ($(this).length > 1 || $(this).length === 0) {
        $.each($(this), function(i, input) {
            $(input).DMDateTimeCombo(options);
        });
        return false;
    }
    
    var _hasTime = ['datetime', 'datetime-local', 'time'].indexOf($(this).attr('type')) !== -1;
    var _hasDate = ['date', 'datetime', 'datetime-local'].indexOf($(this).attr('type')) !== -1;
    
    var _options = {
        'yearSelect': null,
        'monthSelect': null,
        'daySelect': null,
        'hourSelect': null,
        'minuteSelect': null,
        'minYear': new Date().getFullYear()-5, //5 years ago
        'maxYear': new Date().getFullYear()+5, //next 5 years
        'defaultDate': new Date(),
        'allowEmpty': true,
        'minuteIncrement': 15
    };
    
    $.each(_options, function(optionName, value) {
        if ($(self).data(optionName.toLowerCase())) {
            _options[optionName] = $(self).data(optionName.toLowerCase());
        }
    });
    _options = $.extend(_options, options);
    _options.input = $(this);
    
    var _domOptions = [];
    if (_hasDate) {
        _domOptions.push('yearSelect');
        _domOptions.push('monthSelect');
        _domOptions.push('daySelect');
    };
    if (_hasTime) {
        _domOptions.push('hourSelect');
        _domOptions.push('minuteSelect');
    }
    
    this.setupSelectOptions = function() {
        $.each(_domOptions, function(i, optionName) {
            if (typeof _options[optionName] === 'string') { //selector
                _options[optionName] = $(_options[optionName]);
            } else if (_options[optionName] instanceof jQuery) {
                //do nothing, it's already a jQuery object
            } else if (_options[optionName] === null) {
                if (_options.input.attr('id')) {
                    var select = $('#' + _options.input.attr('id') + '_' + optionName);
                    if (!select.length) {
                        console.error(_options.input);
                        console.error('DMDateTimeCombo ' + optionName + ' is invalid');
                    }
                    _options[optionName] = $('#' + _options.input.attr('id') + '_' + optionName);
                }
            } else {
                console.error(_options.input);
                console.error('DMDateTimeCombo ' + optionName + ' is invalid');
            }
        });
    };
    
    this.drawSelectOptions = function() {
        
        if (_hasDate) {
            var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            _options['monthSelect'].empty();
            _options['yearSelect'].empty();
            if (_options.allowEmpty === true) {
                _options['monthSelect'].append($('<option>').attr('value', '').text('Mon')).val('');
                _options['yearSelect'].append($('<option>').attr('value', '').text('Year')).val('');
                if (_hasTime) {
                    _options['hourSelect'].append($('<option>').attr('value', '').text('Hour')).val('');
                    _options['minuteSelect'].append($('<option>').attr('value', '').text('Minute')).val('');
                }
            }

            for (var month = 1; month <= 12; month++) {
                _options['monthSelect'].append($('<option>').attr('value', this.leftPadNumber(month, 0, 2)).text(monthNames[month-1].substr(0, 3)));
            }

            for (var year = _options.minYear; year <= _options.maxYear; year++) {
                _options['yearSelect'].append($('<option>').attr('value', year).text(year));
            }
            
            this.drawDaySelect(31);
        }
        
        if (_hasTime) {
        
            for (var hour = 0; hour < 24; hour++) {
                _options['hourSelect'].append($('<option>').attr('value', this.leftPadNumber(hour, 0, 2)).text(this.leftPadNumber(hour, 0, 2)));
            }
            
            for (var minute = 0; minute < 60; minute += _options.minuteIncrement) {
                _options['minuteSelect'].append($('<option>').attr('value', this.leftPadNumber(minute, 0, 2)).text(this.leftPadNumber(minute, 0, 2)));
            }
            
        }
        
        //Set each select value to the first option
        $.each(_domOptions, function(i, optionName) {
            var firstOption = _options[optionName].children('option').first();
            _options[optionName].val(firstOption.attr('value'));
        });
        
    };
    
    this.drawDaySelect = function(maximumDays) {
        _options['daySelect'].empty();
        
        if (_options.allowEmpty === true) {
            _options['daySelect'].append($('<option>').attr('value', '').text('Day')).val('');
        }
        
        for (var day = 1; day <= maximumDays; day++) {
            _options['daySelect'].append($('<option>').attr('value', this.leftPadNumber(day, 0, 2)).text(day));
        }
    };
    
    this.leftPadNumber = function(number, padding, length) {
        var paddedNumber = number.toString();
        while (paddedNumber.length < length) {
            paddedNumber = padding.toString() + paddedNumber;
        }
        return paddedNumber;
    };
    
    this.selectsToString = function() {
        var dateTimeString = '';
        
        if (_hasDate) {
            dateTimeString += _options['yearSelect'].val() + '-' + _options['monthSelect'].val() + '-' + _options['daySelect'].val();
        }
        
        if (_hasDate && _hasTime) {
            dateTimeString += ' ';
        }
        
        if (_hasTime) {
            dateTimeString += _options['hourSelect'].val() + ':' + _options['minuteSelect'].val() + ':00';
        }
        
        if (_hasDate && _hasTime) {
            return (dateTimeString.length !== 19 ? '' : dateTimeString); //return empty string if we do not have a full YYYY-MM-DD HH:II:SS
        } else if (_hasDate) {
            return (dateTimeString.length !== 10 ? '' : dateTimeString); //return empty string if we do not have a full YYYY-MM-DD
        } else if (_hasTime) {
            return dateTimeString.length !== 8 ? '' : dateTimeString;
        } else {
            return '';
        }
    };
    
    this.setupSelectEvents = function() {
        $(this.getSelects()).on('change', function(event) {
            if (self.selectsToString()) {
                self.setInput(self.selectsToString());
                self.updateMaximumDays();
            }
        });
    };
    
    this.setupInputEvents = function() {
        $(_options['input']).on('change', function(event) {
            self.stringToSelects();
            self.updateMaximumDays();
        });
    };
    
    this.stringToSelects = function() {
        if ((_hasDate && _hasTime && this.getInput().length === 19) || (_hasDate && !_hasTime && this.getInput().length === 10) || (!_hasDate && _hasTime && this.getInput().length === 8)) {
            
            if (_hasDate) {
                var date = new Date(this.getInput());
            
                _options['yearSelect'].val(date.getFullYear());
                _options['monthSelect'].val(this.leftPadNumber((date.getMonth() + 1), 0, 2));
                _options['daySelect'].val(this.leftPadNumber(date.getDate(), 0, 2));
            }
            
            if (_hasTime) {
                
                if (_hasDate) {
                    var time = date;
                } else {
                    var time = new Date( (new Date().toDatestamp()) + ' ' + this.getInput() );
                }
                
                _options['hourSelect'].val(this.leftPadNumber(time.getHours(), 0, 2));
                _options['minuteSelect'].val(this.leftPadNumber(time.getMinutes(), 0, 2));
            }
        } else {
            if (_options.allowEmpty) {
                this.getSelects().val('');
            }
        }
    };
    
    this.updateMaximumDays = function() {
        if (!_hasDate) {
            return false;
        }
        
        var dateStr = this.selectsToString();
        var currentDayValue = parseInt(_options.daySelect.val());
        
        if (dateStr) {
            var firstDateofMonth = new Date(this.dateStringToFirstOfMonthDateString(dateStr));
            var lastDateOfMonth = new Date(firstDateofMonth.getFullYear(), firstDateofMonth.getMonth() + 1, 0);
            var daysInMonth = lastDateOfMonth.getDate();
            this.drawDaySelect(daysInMonth);
            
            if (currentDayValue <= daysInMonth) {
                _options.daySelect.val(this.leftPadNumber(currentDayValue, 0, 2));
            } else {
                _options.daySelect.val(this.leftPadNumber(daysInMonth, 0, 2));
            }
        }
    };
    
    this.dateStringToFirstOfMonthDateString = function(dateStr) {
        return dateStr.toString().substr(0, 8) + '01' + dateStr.toString().substr(10);
    };
    
    this.getSelects = function() {
        var selects = $(_options['daySelect']).add(_options['monthSelect']).add(_options['yearSelect']);
        if (_hasTime) {
            return selects.add(_options['hourSelect']).add(_options['minuteSelect']);
        } else {
            return selects;
        }
    };
    
    this.getInput = function() {
        return _options.input.val();
    };
    
    this.setInput = function(value) {
        return _options.input.val(value);
    };
    
    this.init = function() {
        if (this.hasDateTimeCombo()) {
            return false;
        }
        
        this.setupSelectOptions();
        this.drawSelectOptions();
        this.setupSelectEvents();
        this.setupInputEvents();
        this.updateRequiredAttributes();
        
        this.stringToSelects();
        
        _options.input.data('DMDateTimeCombo', this).hide();
    };
    
    this.hasDateTimeCombo = function() {
        return (_options.input.data('DMDateTimeCombo'));
    };
    
    this.updateRequiredAttributes = function() {
        $.each(_domOptions, function(i, optionName) {
            _options[optionName].prop('required', _options.input.prop('required'));
        });
        _options.input.prop('required', false);
    };
    
    this.init();
    
};