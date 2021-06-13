<?php
    
    class Robot
    {
        /**
         * @var string
         */
        private string $robotName;
        
        /**
         * @var array|string
         */
        private static $usedNames = [];
        
        /**
         * @throws Exception
         */
        public function getName (): string
        {
            if ( empty($this->robotName) ) {
                $this->robotName = $this->nameFactoryRobot();
            }
            
            return $this->nameFactoryRobot();
        }
        
        /**
         * @throws Exception
         */
        private function nameFactoryRobot (): string
        {
            $robotName = $this->generateRobotName();
            
            if ( isset(self::$usedNames[$robotName]) ) {
                $robotName = $this->nameFactoryRobot();
            } else {
                self::$usedNames[$robotName] = true;
            }
            
            return $robotName;
        }
        
        /**
         * @throws Exception
         */
        private function generateRobotName (): string
        {
            return chr(random_int(65, 90)).chr(random_int(65, 90)).random_int(100, 999);
        }
        
        public function reset (): void
        {
            $this->robotName = '';
        }
    }