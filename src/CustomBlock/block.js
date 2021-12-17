wp.blocks.registerBlockType('impsyde/impsyde-table', {
    title: 'Impsyde-Table-Users',
    icon: 'table',
    category: 'common',
    attributes: {
      content: {type: 'string'},
      color: {type: 'string'}
    },
    edit: function(props) {
      return <table>
        <tr>
          <th>
            Tests
          </th>
        </tr>
        </table>;
    },
    save: function(props) {
    return null;
    }
  })