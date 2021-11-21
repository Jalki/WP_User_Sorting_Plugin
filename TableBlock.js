const { registerBlockType } = window.wp.blocks;
const { __ } = window.wp.i18n;

wp.blocks.registerBlockType(
    //Name Parameter
    'Test/border-box', {
    title: 'User Table',
    icon: 'wordpress-alt',
    category: 'common',
    edit: () => <p>PLS WORK </p>,
    save: () => <p>PLS WORK</p>
})