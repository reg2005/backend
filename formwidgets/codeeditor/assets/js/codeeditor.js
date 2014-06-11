/*
 * Code editor form field control
 *
 * Data attributes:
 * - data-control="codeeditor" - enables the code editor plugin
 * - data-vendor-path="/" - sets the path to find Ace editor files
 * - data-language="php" - set the coding language used
 * - data-theme="textmate" - the colour scheme and theme 
 *
 * JavaScript API:
 * $('textarea').codeEditor({ vendorPath: '/', language: 'php '})
 *
 * Dependancies:
 * - Ace Editor (ace.js)
 */

+function ($) { "use strict";

    // CODEEDITOR CLASS DEFINITION
    // ============================

    var CodeEditor = function(element, options) {
        this.options   = options
        this.$el       = $(element)
        this.$textarea = this.$el.find('>textarea:first')
        this.$toolbar  = this.$el.find('>.editor-toolbar:first')
        this.$code     = null
        this.editor    = null
        
        // Toolbar links
        this.isFullscreen = false
        this.$fullscreenEnable = this.$toolbar.find('li.fullscreen-enable')
        this.$fullscreenDisable = this.$toolbar.find('li.fullscreen-disable')

        this.init();
    }

    CodeEditor.DEFAULTS = {
        vendorPath: '/',
        showInvisibles: true,
        highlightActiveLine: true,
        showGutter: true,
        showPrintMargin: true,
        highlightSelectedWord: false,
        hScrollBarAlwaysVisible: false,
        useSoftTabs: true,
        tabSize: 4,
        fontSize: 12,
        wrapMode: false,
        readOnly: false,
        theme: 'textmate',
        folding: 'manual',
        language: 'php',
        margin: 0
    }

    CodeEditor.prototype.init = function (){

        var self = this;

        /*
         * Control must have an identifier
         */
        if (!this.$el.attr('id')) {
            this.$el.attr('id', 'element-' + Math.random().toString(36).substring(7))
        }

        /*
         * Create code container
         */
        this.$code = $('<div />')
            .addClass('editor-code')
            .attr('id', this.$el.attr('id') + '-code')
            .css({
                position: 'absolute',
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
            })
            .appendTo(this.$el)

        /*
         * Initialize ACE editor
         */
        var editor = this.editor = ace.edit(this.$code.attr('id')),
            options = this.options,
            $form = this.$el.closest('form');

        this.$textarea.hide();
        editor.getSession().setValue(this.$textarea.val())

        $form.on('oc.beforeRequest', function(){
            self.$textarea.val(editor.getSession().getValue())
        })

        editor.on('change', function() {
            $form.trigger('change')
            self.$textarea.trigger('oc.codeEditorChange')
        })

        $(window).on('resize, oc.updateUi', function() {
            editor.resize()
        })

        /*
         * Set language and theme
         */
        assetManager.load({
            js:[
                options.vendorPath + '/mode-' + options.language + '.js',
                options.vendorPath + '/theme-' + options.theme + '.js'
            ]
        }, function(){
            editor.setTheme('ace/theme/' + options.theme)
            var inline = options.language === 'php'
            editor.getSession().setMode({path: 'ace/mode/'+options.language, inline: inline})
        })

        /*
         * Config editor
         */
        editor.wrapper = this
        editor.setShowInvisibles(options.showInvisibles)
        editor.setHighlightActiveLine(options.highlightActiveLine)
        editor.renderer.setShowGutter(options.showGutter)
        editor.renderer.setShowPrintMargin(options.showPrintMargin)
        editor.setHighlightSelectedWord(options.highlightSelectedWord)
        editor.renderer.setHScrollBarAlwaysVisible(options.hScrollBarAlwaysVisible)
        editor.getSession().setUseSoftTabs(options.useSoftTabs)
        editor.getSession().setTabSize(options.tabSize)
        editor.setReadOnly(options.readOnly)
        editor.getSession().setFoldStyle(options.folding)
        editor.getSession().setUseWrapMode(options.wrapMode)
        editor.setFontSize(options.fontSize)
        editor.on('blur', function(){ self.$el.removeClass('editor-focus') })
        editor.on('focus', function(){ self.$el.addClass('editor-focus') })

        editor.renderer.setScrollMargin(options.margin, options.margin, 0, 0)
        editor.renderer.setPadding(options.margin) 

        /*
         * Toolbar
         */

        this.$toolbar.find('>ul>li>a')
            .each(function(){
                var abbr = $(this).find('>abbr'),
                    label = abbr.text(),
                    help = abbr.attr('title'),
                    title = label + ' (<strong>' + help + '</strong>)';

                $(this).attr('title', title)
            })
            .tooltip({
                delay: 500,
                placement: 'auto',
                html: true 
            })
        ;

        this.$fullscreenDisable.hide()
        this.$fullscreenEnable.on('click', '>a', $.proxy(this.toggleFullscreen, this))
        this.$fullscreenDisable.on('click', '>a', $.proxy(this.toggleFullscreen, this))

        /*
         * Hotkeys
         */
        this.$el.hotKey({ hotkey: 'esc', hotkeyMac: 'esc', callback: function() {
            self.isFullscreen && self.toggleFullscreen.apply(self)
        }})

        editor.commands.addCommand({
            name: 'toggleFullscreen',
            bindKey: { win: 'Ctrl+Alt+F', mac: 'Ctrl+Alt+F' },
            exec: $.proxy(this.toggleFullscreen, this),
            readOnly: true
        })
    }

    CodeEditor.prototype.setTheme = function(theme) {
        var self = this
        assetManager.load({
            js:[
                this.options.vendorPath + '/theme-' + theme + '.js'
            ]
        }, function(){
            self.editor.setTheme('ace/theme/' + theme)
        })
    }

    CodeEditor.prototype.getEditorObject = function() {
        return this.editor
    }

    CodeEditor.prototype.toggleFullscreen = function() {
        this.$el.toggleClass('editor-fullscreen')
        this.$fullscreenEnable.toggle()
        this.$fullscreenDisable.toggle()

        this.isFullscreen = this.$el.hasClass('editor-fullscreen')

        if (this.isFullscreen) {
            $('body').css({ overflow: 'hidden' })
        }
        else {
            $('body').css({ overflow: 'inherit' })
        }

        this.editor.resize()
        this.editor.focus()
    }

    // CODEEDITOR PLUGIN DEFINITION
    // ============================

    var old = $.fn.codeEditor

    $.fn.codeEditor = function (option) {
        var args = Array.prototype.slice.call(arguments, 1), result
        this.each(function () {
            var $this   = $(this)
            var data    = $this.data('oc.codeEditor')
            var options = $.extend({}, CodeEditor.DEFAULTS, $this.data(), typeof option == 'object' && option)
            if (!data) {
                $this.data('oc.codeEditor', (data = new CodeEditor(this, options)))
                $this.trigger('oc.codeEditorReady')
            }
            if (typeof option == 'string') result = data[option].apply(data, args)
            if (typeof result != 'undefined') return false 
        })

        return result ? result : this
    }

    $.fn.codeEditor.Constructor = CodeEditor

    // CODEEDITOR NO CONFLICT
    // =================

    $.fn.codeEditor.noConflict = function () {
        $.fn.codeEditor = old
        return this
    }

    // CODEEDITOR DATA-API
    // ===============
    $(document).render(function () {
        $('[data-control="codeeditor"]').codeEditor()
    })

}(window.jQuery);
