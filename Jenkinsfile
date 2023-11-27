pipeline {
    agent any
    
    stages {
        stage('Get Repo') {
            steps {
                deleteDir() // Clears workspace
                git branch: 'master', url: 'https://github.com/alexdoe99/theti.git'
            }
        }
        
        stage('Old build down') {
            steps {
                sh 'sudo chmod 777 /var/run/docker.sock'
                sh 'sudo chmod 777 -R /var/lib/jenkins/workspace/CI CD 2/'
                sh 'docker-compose -f /home/ubuntu/theti/docker/docker-compose.yml down'
            }
        }

        stage('Build UP') {
            steps {
                sh 'docker build -t theti /var/lib/jenkins/workspace/CI CD 2/'
                sh 'docker-compose -f /home/ubuntu/theti/docker/docker-compose.yml up --build -d'
            }
        }
        
        stage('Test') {
            steps {
                sh 'cd /home/ubuntu/theti/docker/ && phpunit --log-junit result.xml UnitTestFiles/Test/FirstTest.php'
            }
        }
    }
    
    triggers {
        // Define trigger for SCM changes
        githubPush()
    }
}









