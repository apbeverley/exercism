<?php
    
    class triangle
    {
        private $dimension;
        
        public function __construct(...$dimensions)
        {
            $this->dimension = $dimensions;
        }
    
        /**
         * @throws Exception
         */
        public function kind(): string
        {
            if ($this->validTriangle() === false) {
                throw new Exception('Triangle Inequality');
            } else if ($this->isEquilateral()) {
                $response = 'equilateral';
            } else if ($this->isIsosceles()) {
                $response = 'isosceles';
            } else if ($this->isScalene()) {
                $response = 'scalene';
            }
            
            return $response ?? '';
        }
        
        private function validTriangle(): bool
        {
            return (max($this->dimension) * 2) < ($this->dimension[0] + $this->dimension[1] + $this->dimension[2]);
        }
        
        private function isEquilateral(): bool
        {
            return $this->dimension[0] === $this->dimension[1] && $this->dimension[0] === $this->dimension[2];
        }
        
        private function isIsosceles(): bool
        {
            return $this->dimension[0] === $this->dimension[1]
                || $this->dimension[0] === $this->dimension[2]
                || $this->dimension[1] === $this->dimension[2];
        }
        
        private function isScalene(): bool
        {
            return $this->dimension[0] !== $this->dimension[1]
                && $this->dimension[0] !== $this->dimension[2]
                && $this->dimension[1] !== $this->dimension[2];
        }
    }