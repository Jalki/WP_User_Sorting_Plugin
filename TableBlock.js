(function (blocks, editor, components, i18n, element) {
    //Custome block code
    var CreateEl = wp.element.createElement
    var RichText = wp.editor.RichText
    var BlockControls = wp.editor.BlockControls
    var AlignmentToolbar = wp.editor.AlignmentToolbar
    var MediaUpload = wp.editor.MediaUpload
    var InspectorControls = wp.editor.InspectorControls
    var TextControl = components.TextControl
})(
    window.wp.blocks,
    window.wp.editor,
    window.wp.components,
    window.wp.i18n,
    window.wp.element
)

registerBlockType(
    //Name Parameter
    'impsydetest/usertable', {
    title: i18n.__('User_Table'),
    description: i18n.__('A custom block made for the Impsyde Code test that upload a table of users'),
    icon: 'wordpress-alt',
    category: 'common',
    attributes: {
        title:{
            type: 'array',
            source: 'children',
            selector: 'h3'
        },
        subtitle:{
            type:'array',
            source: 'children',
            selector: 'h5'
        }
    },
    edit: () => <p>PLS WORK </p>,
    save: () => <p>PLS WORK</p>
})