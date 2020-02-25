import { registerBlockType } from '@wordpress/blocks';
import React from 'react';

registerBlockType('gutenberg-examples/example-01-basic-esnext', {
  title: 'Example: Basic (esnext)',
  icon: 'universal-access-alt',
  category: 'layout',
  example: {},
  attributes: {
    content: { type: 'string', source: 'text', selector: 'p' }
  },
  edit({ attributes, setAttributes }) {
    const { content } = attributes;
    const changeHandler = (e: React.ChangeEvent<HTMLInputElement>) => {
      setAttributes({ content: e.target.value });
    };
    return (
      <>
        <label>
          見出し
          <input type="text" value={content} onChange={changeHandler} />
        </label>
      </>
    );
  },
  save(props: any) {
    return <p>{props.attributes.content}</p>;
  }
});
