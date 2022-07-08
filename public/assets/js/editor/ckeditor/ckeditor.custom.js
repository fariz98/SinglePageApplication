// // Default ckeditor
// CKEDITOR.replace( 'editor1', {
//                 on: {
//                     contentDom: function( evt ) {
//                         // Allow custom context menu only with table elemnts.
//                         evt.editor.editable().on( 'contextmenu', function( contextEvent ) {
//                             var path = evt.editor.elementPath();

//                             if ( !path.contains( 'table' ) ) {
//                                 contextEvent.cancel();
//                             }
//                         }, null, null, 5 );

//                         // evt.editor.editable().on('keydown', function(event) {
//                         //     if( event.data.getKeystroke() == 13 ) {
//                         //         event.data.preventDefault();
//                         //         // globalChatEditor.updateElement();
//                         //         submitForm();
//                         //         // return false;
//                         //     }
//                         // });

//                     }
//                 }
//             } );



//if user hit enter, submit form
// var globalChatEditor = CKEDITOR.instances.chatContent;

// globalChatEditor.on("contentDom", function() {
//     globalChatEditor.document.on("keydown", function(event) {
//     if( event.data.getKeystroke() == 13 ) {
//         event.data.preventDefault();
//         globalChatEditor.updateElement();
//         $("#chatForm").submit();
//         return false;
//     }
//     });
//     globalChatEditor.document.on("keyup", function(event) {
//     if( event.data.getKeystroke() == 13 ) {
//         globalChatEditor.setData("");
//         globalChatEditor.focus();
//         ajaxUpdates();
//         event.data.preventDefault();
//         return false;
//     }
//     });
// });



// // Inline ckeditor
// CKEDITOR.disableAutoInline = true;
// //init the area to be done
CKEDITOR.inline( 'edit-teks', {
    toolbar: [
        {
            name: 'basicstyles',
            groups: ['basicstyles'],
            items: [
                'Format',
                'Bold',
                'Italic',
                'Underline',
                'Subscript',
                'Superscript',
                'SpecialChar',
            ]
        },
    ],
    fillEmptyBlocks: false,
    autoParagraph: false,
    title: 'Sila klik di sini untuk mengemaskini teks perenggan ini.',
    disableNativeSpellChecker : false
} );