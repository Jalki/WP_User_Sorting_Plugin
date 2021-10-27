alert("Code for Custom Block");
import { registerBlockType } from '@wordpress/blocks';

wp.blocks.registerBlockType('brad/border-box', {
    title: 'Table-of-Users',
    icon: 'smiley',
    category: 'common',
    attributes: {
        content: {type: 'string'},
        color: {type:'string'}
    },
    edit: function(props){
        return createElement('input', {type: "text"});
    },
    save: function(props){
        return createElement('table', null, 'This is Table for users');
    }
});