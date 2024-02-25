import Quill from 'quill';
window.Quill = Quill;

import * as quillTableUI from 'quill-table-ui'

Quill.register({
    'modules/tableUI': quillTableUI.default
}, true);

// Quill.register(Quill.import('attributors/attribute/direction'), true);
// Quill.register(Quill.import('attributors/class/align'), true);
// Quill.register(Quill.import('attributors/class/background'), true);
// Quill.register(Quill.import('attributors/class/color'), true);
// Quill.register(Quill.import('attributors/class/direction'), true);
// Quill.register(Quill.import('attributors/class/font'), true);
// Quill.register(Quill.import('attributors/class/size'), true);
Quill.register(Quill.import('attributors/style/align'), true);
Quill.register(Quill.import('attributors/style/background'), true);
Quill.register(Quill.import('attributors/style/color'), true);
Quill.register(Quill.import('attributors/style/direction'), true);
Quill.register(Quill.import('attributors/style/font'), true);
Quill.register(Quill.import('attributors/style/size'), true);

window.loadQuill = function(){
    document.querySelectorAll('.quill-editor:not(.ready)').forEach(function(element){
        let container = element.closest('.quill-container');
        let textarea = container.querySelector('.quill-textarea');

        const toolbarOptions = [
            [{ header: [1, 2, 3, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            ['link', 'image'],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'list': 'check' }],
            ['table'],
            ['clean'],
        ];

        let quill = new Quill(element, {
            theme: 'snow',
            modules: {
                table: true,
                tableUI: true,
                toolbar: {
                    container: toolbarOptions,
                    handlers: {
                        table: function() {
                            this.quill.getModule('table').insertTable(3, 3);
                        }
                    }
                },
                clipboard: {
                    matchVisual: false
                }
            }
        });

        // let table = quill.getModule('table')
        // container.querySelector('.ql-insert-table').addEventListener('click', function(){
        //     console.log('click');
        //     table.insertTable(2, 2);
        // });

        quill.root.innerHTML = textarea.value;

        quill.on('text-change', function () {
            let value = quill.root.innerHTML;
            textarea.value = value;
            textarea.dispatchEvent(new Event('input'));
            console.log(quill.getContents());
        });

        element.classList.add('ready');
        container.querySelector('.quill-loading').remove();
    });
}
window.loadQuill();