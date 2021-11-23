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

alert("Working?")

wp.blocks.registerBlockType(
    //Name Parameter
    'ImpsydeTest/UserTable', {
    title: 'User Table',
    icon: 'wordpress-alt',
    category: 'common',
    edit: () => <p>PLS WORK </p>,
    save: () => <p>PLS WORK</p>
})