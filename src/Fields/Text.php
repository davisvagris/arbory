<?php

namespace CubeSystems\Leaf\Fields;

use CubeSystems\Leaf\Html\Elements\Div;
use CubeSystems\Leaf\Html\Elements\Element;
use CubeSystems\Leaf\Html\Elements\Inputs\Input;

/**
 * Class Text
 * @package CubeSystems\Leaf\Fields
 */
class Text extends AbstractField
{
    public function __toString()
    {
        return (string) $this->renderListView();
    }

    /**
     * @param array $attributes
     * @return Element
     */
    public function render( array $attributes = [] )
    {
        if( $this->isForList() )
        {
            return $this->renderListView( $attributes );
        }
        elseif( $this->isForForm() )
        {
            $input = new Input;
            $input->setName( $this->getNameSpacedName() );
            $input->setValue( $this->getValue() );
            $input->addClass( 'text' );

            return ( new Div )
                ->append( ( new Div( $input->label( $this->getLabel() ) ) )->addClass( 'label-wrap' ) )
                ->append( ( new Div( $input ) )->addClass( 'value' ) )
                ->addClass( 'field type-text' );
        }
    }

    protected function renderListView( array $attributes = [] )
    {
        $model = $this->getModel();

        return view( $this->getViewName(), [
            'field' => $this,
            'attributes' => $attributes,
            'url' => route( 'admin.model.edit', [
                $this->getController()->getSlug(),
                $model->getKey()
            ] ),
        ] );
    }
}
