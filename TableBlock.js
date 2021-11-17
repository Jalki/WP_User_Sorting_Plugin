const { registerBlockType } = window.wp.blocks;
const { __ } = window.wp.i18n;

registerBlockType('Test/border-box', {
    title: 'User Table',
    icon: 'table',
    category: 'common',
    attributes: {
        content: { type: 'string' },
        color: { type: 'string' }
    },
})